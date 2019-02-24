@extends('layouts.app')

@section('content')
<div class="jumbotron py-3">
  <div class="container">
    <h1 class="display-3">Hello, world!</h1>
    <p class="lead">Réalisation d'un mini blog avec le framework LARAVEL 5.</p>
    <p>Fonctionnalités :</p>
    <ul>
       <li>Une page d’accueil affichant les 10 derniers articles de la base de données,</li>
       <li>Un espace d’administration permettant de gérer les articles (ajout, modification et suppression),</li>
       <li>Un système d’authentification pour accéder à la page d’administration.</li>
    </ul>
  </div>
</div>
<div class="container">

  <h2>Les 10 derniers articles</h2>

    <div class="row">
          @foreach($posts as $post)
          <div class="col-md-4 mb-3">
          <div class="card" >
            <img src="http://placehold.it/350x150" class="card-img-top" alt="{{ $post->title }}">
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{ $post->user->name }}</h6>
              <p class="card-text">{{ Str::words($post->content,17,'...') }}</p>
              <div class="d-flex justify-content-end">
                <a href="{{ URL::action('PostsController@show', $post->id) }}" class="btn btn-secondary">Lire la suite</a>
              </div>

            </div>
          </div>
          </div>
          @endforeach

    </div>
</div>
@endsection
