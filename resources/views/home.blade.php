@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead class="table-dark">
                <tr class="d-flex">
                  <th class="col-1">#</th>
                  <th class="col-6">Titre</th>
                  <th class="col-3">Posté le</th>
                  <th class="col-1 text-warning"><i class="fas fa-edit fa-2x"></i></th>
                  <th class="col-1 text-danger"><i class="fas fa-trash-alt fa-2x"></i></th>
                </tr>
              </thead>
              <tbody>
                @foreach($posts as $post)
                <tr class="d-flex">
                  <td class="col-1">{{ $post->id }}</td>
                  <td class="col-6">{{ $post->title }}</td>
                  <td class="col-3">{{ $post->created_at }}</td>
                  <td class="col-1"><a href="{{ URL::action('PostsController@edit', $post->id) }}" class="text-warning"><i class="fas fa-edit fa-2x"></i></a></td>
                  <td class="col-1"><a href="{{ URL::action('PostsController@destroy', $post->id) }}" class="text-danger"><i class="fas fa-trash-alt fa-2x"></i></a></td>
                </tr>
                @endforeach
              </tbody>
              </table>
            </div>
        </div>
    </div>
</div>
@endsection
