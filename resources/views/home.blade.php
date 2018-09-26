@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Publicaciones</h4>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Fecha</th>
                            <th>Título</th>
                            <th>Categoría</th>
                            <th>Destino</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->created_at}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->category->name}}</td>
                                <td>{{$post->destiny->name}}</td>
                                <td>
                                    <a href="{{url('post/delete/'.$post->id)}}" class="btn btn-xs btn-danger"><i class="fa fa-ban"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Nueva publicación</h4>
                    </div>
                </div>
                <form action="{{url('post/save')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="title">Título</label>
                                    <input type="text" class="form-control" name="title" placeholder="Título visible en el grid" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile">Imágen grid</label>
                                    <input type="file" name="img">
                                    <p class="help-block">JPG, JPEG, PNG formato Landscape</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="key_words">Meta-Palabras clave</label>
                                    <input type="text" class="form-control" name="key_words" placeholder="separadas,por,coma,maximo,15" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="created_at">Fecha Publicación</label>
                                    <input type="text" class="form-control" name="created_at" value="{{\Carbon\Carbon::now()->toDateTimeString()}}" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="desc">Descripción</label>
                                    <input type="text" class="form-control" name="desc" placeholder="Máximo 30 palabras" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="category_id">Categoría</label>
                                    <select name="category_id" class="form-control">
                                        @foreach(\App\Category::all() as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="destiny_id">Destino</label>
                                    <select name="destiny_id" class="form-control">
                                        @foreach(\App\Destiny::all() as $destiny)
                                            <option value="{{$destiny->id}}">{{$destiny->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <textarea id="summernote" name="content">
                        <h3>Publicación de Ejemplo</h3>
                        dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                        <br>
                        <br>
                        <ul>
                            <li>Remaining essentially unchanged</li>
                            <li>Make a type specimen book</li>
                            <li>Unknown printer</li></ul><p><br></p><p style="text-align: center; "><img src="https://okrentacar.es/img/oficinas/barcelona.jpg" alt="Resultado de imagen de barcelona"><br></p><p><br></p><p><br></p><ul>
                        </ul>
                        <div class="text-center">
                            <a href="#" target="_blank" class="btn btn-primary btn-lg">Llevame a la oferta <i class="fa fa-arrow-circle-o-right"></i></a>
                        </div>
                    </textarea>
                    </div>
                    <div class="panel-footer text-right">
                        <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-save"></i> Publicar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
