@extends('layouts.app')

@section('content')
<div class="container">
  <a href="{{ URL::action('PostsController@index') }}">Retour à la liste</a>
  <h1>Editer l'article</h1>

  {{ Form::model(
    $post, [
          'url'=>$post->id ? URL::action('PostsController@update', $post ) : URL::action('PostsController@create', $post),
          'method'=>$post->id ? 'POST' : 'PUT'
       ]
    )}}
     <p>{{ Form::label('title', 'Titre :') }} {{ Form::text('title') }}</p>
     <p>{{ Form::label('content', 'Article :') }} {{ Form::textarea('content') }}</p>
     {{ Form::submit() }}
  {{ Form::close() }}

</div>
@endsection
