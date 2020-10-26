@extends('layouts.master')

@section('title')
  Dashboard | Obrisi Post
@endsection

@section('content')

  <div class="container">
    <div class="col-md-8 offset-md-2 text-center">
      <div class="card">
        <div class="card-header">
          <h3 class="text-danger">UPOZORENJE!</h3>
          <hr>
        </div>
        <div class="card-body">
        <h6>Da li stvarno želite da obrišete post <b class="text-primary">{{$post->title}}</b>?</h6>
        <i>(Ako potvrdite, post će biti obrisan zauvek!!!)</i>
        <form action="/post-destroy/{{$post->id}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                <button type="submit" class="btn btn-danger">Obriši Post</button>
                <a href="/posts" class="btn btn-secondary">Poništi</a>
                 </form>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('scripts')