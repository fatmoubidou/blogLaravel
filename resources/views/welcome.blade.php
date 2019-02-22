@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

          @foreach($posts as $post)
          <div class="col-md-4 mb-3">
          <div class="card" >
            <img src="http://placehold.it/350x150" class="card-img-top" alt="{{ $post->title }}">
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{ $post->user->name }}</h6>
              <p class="card-text">{{ $post->content }}</p>
              <a href="{{ URL::action('PostsController@show', $post->id) }}" class="card-link">Lire la suite</a>
            </div>
          </div>
          </div>
          @endforeach

    </div>
</div>
@endsection
