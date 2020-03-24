<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id';
    public $timestamps = true;

    // Relación Many to Many
    public function tags(){
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    // Relación Many to Many
    public function categories(){
        return $this->belongsToMany(Category::class)->withTimestamps();
    }
}
