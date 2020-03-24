<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Translations;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class AdminManager extends Controller
{
    protected $object;
    protected $translatable;
    public $array_locale = ['en', 'es'];

    function __construct($object, $translatable)
    {
        $this->object = $object;
        $this->translatable = $translatable;
    }

    public function getArrayLocale()
    {
        return $this->array_locale;
    }

    public function handleForm($entity)
    {
        $entity = $entity == null ? $this->object : $entity;

        if($this->translatable){
            $this->handleTranslation($entity);
        }
        else{
            $this->handleEntity($entity);
        }

        $json['success'] = true;
        return JsonResponse::create($json);
    }

    public function handleEntity($entity)
    {
        $request = Request();
        $array_keys = array_keys($request->all());
        $array_many_to_many = array();
        foreach($array_keys as $item){
                if($request->file($item) == null && substr($item, -5) != '_many'){
                if($request->input($item) != null){
                    $entity->{$item} = $request->input($item);
                }
            }
            /*many to many*/
            if(substr($item, -5) == '_many'){
                $array_many_to_many[] = $item;
            }
            /*file*/
            if($request->file($item) != null){
                $entity = $this->uploadFile($entity, $item);
            }
        }

        $entity->save();

        /*many to many*/
        $this->addManyToMany($entity, $array_many_to_many);

        return $entity;
    }

    public function handleTranslation($entity)
    {
        $request = Request();
        $array_keys = array_keys($request->all());
        $array_many_to_many = array();
        foreach($this->array_locale as $key => $locale){
            if($key == 0){
                foreach($array_keys as $item){
                    $rest = substr($item, -3);
                    if($this->ifExistLocale($locale, $rest)){
                        if($request->input($item) != null){
                            $entity->{substr($item, 0, -3)} = $request->input($item);
                        }
                    }
                    else{
                        if(!$this->ifHasAnyLocale($this->array_locale, $rest)){
                            if($request->file($item) == null && substr($item, -5) != '_many' && $item != 'slug'){
                                if($request->input($item) != null){
                                    $entity->{$item} = $request->input($item);
                                }
                            }
                            /*many to many*/
                            if(substr($item, -5) == '_many'){
                                $array_many_to_many[] = $item;
                            }
                            /*file*/
                            if($request->file($item) != null){
                                $entity = $this->uploadFile($entity, $item);
                            }
                        }
                    }
                }
                /*slug*/
                if(asset($request->input('slug'))){
                    $entity->slug = str_slug($request->input('title_'.$locale), '-');
                }

                $entity->save();

                /*many to many*/
                $this->addManyToMany($entity, $array_many_to_many);
            }
            else{
                foreach($array_keys as $item){
                    $rest = substr($item, -3);
                    if($this->ifExistLocale($locale, $rest)){
                        $this->addTranslations(substr($item, 0, -3), $entity, $locale, $request->input($item));
                    }
                }
                /*slug*/
                if(asset($request->input('slug'))){
                    $this->addTranslations('slug', $entity, $locale, str_slug($request->input('title_'.$locale), '-'));
                }
            }
        }

        return true;
    }

//    public function uploadFile($entity)
//    {
//        $request = Request();
//        if ($request->hasFile('file')) {
//            if($request->file('file')->getSize() < 1048576/*1MB*/){
//                $path = $request->file('file')->store('public/'.$entity->getTable(), 'local');
//                if($entity != null){
//                    $this->deleteFile($entity->path);
//                }
//                $entity->path = $path;
//            }
//        }
//        return $entity;
//    }

    public function uploadFile($entity, $item)
    {
        $request = Request();
        if ($request->hasFile($item)) {
            if($request->file($item)->getSize() < 1048576/*1MB*/){
                $path = $request->file($item)->store('public/'.$entity->getTable(), 'local');
                if($entity != null){
                    $this->deleteFile($entity->{$item});
                }
                if(is_dir(getcwd().'/storage')){
                    $this->rmDir_rf(getcwd().'/storage');
                }
                mkdir(getcwd().'/storage');
                $this->recurse_copy(getcwd().'/../storage/app/public',getcwd().'/storage');

                $path = explode('public/', $path);
                $entity->{$item} = $path[1];
            }
        }
        return $entity;
    }

    function recurse_copy($src,$dst) {
        $dir = opendir($src);
        @mkdir($dst);
        while(false !== ( $file = readdir($dir)) ) {
            if (( $file != '.' ) && ( $file != '..' )) {
                if ( is_dir($src . '/' . $file) ) {
                    $this->recurse_copy($src . '/' . $file,$dst . '/' . $file);
                }
                else {
                    copy($src . '/' . $file,$dst . '/' . $file);
                }
            }
        }
        closedir($dir);
    }
    function rmDir_rf($directory)
    {
        foreach(glob($directory . "/*") as $item){
            if (is_dir($item)){
                $this->rmDir_rf($item);
            } else {
                unlink($item);
            }
        }
        rmdir($directory);
    }

    public function addManyToMany($entity, $array_many_to_many)
    {
        $request = Request();
        foreach($array_many_to_many as $item){
            $many = substr($item, 0,-5);
            $entity->{$many}()->detach();
            foreach($request->input($item) as $value) {
                $entity->{$many}()->attach($value);
            }
        }
    }

    public function delete($entity)
    {
        $entity->delete();
        $this->deleteFile($entity->path);
        if($this->translatable){
            $translations = DB::table('translations')
                ->where('table_name', '=', $entity->getTable())
                ->where('foreign_key', '=', $entity->id)
                ->get();
            foreach($translations as $item){
                $item = Translations::findorfail($item->id);
                $item->delete();
            }
        }
        $json['success'] = true;
        return JsonResponse::create($json);
    }

    public function ifExistLocale($locale, $rest){
        return '_'.$locale == $rest;
    }

    public function ifHasAnyLocale($array_locale, $rest){
        foreach($array_locale as $value) {
            if('_'.$value == $rest){
                return true;
            }
        }
        return false;
    }

    public function deleteFile($path)
    {
        if($path != null){
            if (file_exists(getcwd().'/../storage/app/public/'.$path)) {
                // Delete file.
                unlink(getcwd().'/../storage/app/public/'.$path);
            }
        }
    }

    public function addTranslations($column_name, $entity, $locale, $value){
        $translation = DB::table('translations')
            ->where('table_name', '=', $entity->getTable())
            ->where('column_name', '=', $column_name)
            ->where('foreign_key', '=', $entity->id)
            ->where('locale', '=', $locale)
            ->get();
        if(count($translation) == 0){
            $translation = new Translations();
        }
        else{
            $translation = Translations::findorfail($translation[0]->id);
        }
        $translation->table_name = $entity->getTable();
        $translation->column_name = $column_name;
        $translation->foreign_key = $entity->id;
        $translation->locale = $locale;
        $translation->value = $value;
        $translation->save();
    }

    public function getEntityTranslations($object, $locale){
        $translations = DB::table('translations')
            ->where('table_name', '=', $object->getTable())
            ->where('foreign_key', '=', $object->id)
            ->where('locale', '=', $locale)
            ->get();
        $entity = DB::table($object->getTable())
            ->where('id', '=', $object->id)
            ->get();
        foreach($translations as $item){
            $entity->{$item->column_name} = $item->value;
        }
        return $entity;
    }

}