<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Page | Details</div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="box-body">
                    <!-- Custom Tabs -->
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_en" data-toggle="tab">EN</a></li>
                            <li><a href="#tab_es" data-toggle="tab">ES</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_en">
                                <div class="form-group">
                                    <label class="control-label">Title</label>
                                    <div>{{ $entity->title }}</div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Slug</label>
                                    <div>{{ $entity->slug }}</div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Description</label>
                                    <div>{{ $entity->description }}</div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Content</label>
                                    <div>{!! $entity->content !!}</div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Categories</label>
                                    <div>
                                        @foreach($categories as $item)
                                            <i>{{ $item }} @if(!$loop->last), @endif</i>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Tags</label>
                                    <div>
                                        @foreach($tags as $item)
                                            <i>{{ $item }} @if(!$loop->last), @endif</i>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_es">
                                <div class="form-group">
                                    <label class="control-label">Título</label>
                                    <div>{{ $translations['es']->title }}</div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Slug</label>
                                    <div>{{ $translations['es']->slug }}</div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Descripción</label>
                                    <div>{{ $translations['es']->description }}</div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Contenido</label>
                                    <div>{!! $translations['es']->content !!}</div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Categorias</label>
                                    <div>
                                        @foreach($category_translations['es'] as $item)
                                            <i>{{ $item }} @if(!$loop->last), @endif</i>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Etiquetas</label>
                                    <div>
                                        @foreach($tag_translations['es'] as $item)
                                            <i>{{ $item }} @if(!$loop->last), @endif</i>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    {{--<div class="form-group">--}}
                    {{--<label class="control-label">Tags</label>--}}
                    {{--<div>--}}
                    {{--@foreach($tags as $item)--}}
                    {{--<i>{{ $item }} @if(!$loop->last) , @endif</i>--}}
                    {{--@endforeach--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    <div class="form-group">
                        <label class="control-label">Image</label>
                        <div>
                            <img class="img-responsive" src="{{ asset('storage/' . $entity->path) }}" style="max-width: 300px;">
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="button" class="btn btn-danger form-action-cancel">OK</button>
                </div>
            </div>
        </div>
    </div>
</div>

@include('backend.includes.actions_form')