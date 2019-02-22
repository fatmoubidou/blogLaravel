@extends('layouts.app')

@section('content')
<div class="container">
  <a href="{{ URL::action('PostsController@index') }}">Retour à la liste</a>
      <h1>{{ $post->title }}</h1>
      <p>{{ $post->content }}</p>
      <i>{{ $post->user->name }}</i>
      <p>
        <a href="{{ URL::action('PostsController@edit', $post->id) }}" class="button">Editer</a>
      </p>
</div>
@endsection
