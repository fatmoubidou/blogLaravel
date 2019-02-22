@extends('layouts.app')

@section('content')
<div class="container">
      <div class="d-flex justify-content-end">
        <a href="{{ URL::action('PostsController@index') }}" class="btn btn-secondary">Retour aux articles</a>
      </div>

      <div class="mb-2">
        <h2>{{ $post->title }}</h2>
        <p class="mb-4 text-muted">{{ $post->created_at->formatLocalized('%d %B %Y') }} by <a href="#">{{ $post->user->name }}</a></p>
        <p>{{ $post->content }}</p>
        <p>
          <a href="{{ URL::action('PostsController@edit', $post->id) }}" class="button">Editer</a>
        </p>
      </div>
</div>
@endsection
