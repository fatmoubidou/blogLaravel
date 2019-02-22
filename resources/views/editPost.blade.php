@extends('layouts.app')

@section('content')
<div class="container">

  <h2>Editer l'article</h2>
  {{ Form::model(
    $post, [
          'url'=>$post->id ? URL::action('PostsController@update', $post ) : URL::action('PostsController@create', $post),
          'method'=>$post->id ? 'POST' : 'PUT'
       ]
    )}}
      @csrf

      <div class="form-group row">
          <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Titre') }}</label>
          <div class="col-md-6">
              <input id="title" type="text" class="form-control" name="title" value="{{$post->title}}" required autofocus>
          </div>
      </div>

      <div class="form-group row">
          <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('Texte de l\'article') }}</label>
          <div class="col-md-6">
            <textarea name="content" rows="8" cols="80" class="form-control">{{$post->content}}</textarea>
          </div>
      </div>

      <div class="form-group row mb-0">
          <div class="col-md-8 offset-md-4">
              <button type="submit" class="btn btn-primary">
                  {{ __('Enregistrer') }}
              </button>
          </div>
      </div>
{{ Form::close() }}


</div>
@endsection
