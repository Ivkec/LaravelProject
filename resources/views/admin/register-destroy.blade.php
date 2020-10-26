@extends('layouts.master')

@section('title')
  Dashboard | DestroyUser
@endsection

@section('content')

  <div class="container">
    <div class="col-md-8 offset-md-2 text-center">
      <div class="card">
        <div class="card-header">
          <h3 class="text-danger">Pažnja!</h3>
          <hr>
        </div>
        <div class="card-body">
        <h6>Da li stvarno želite da izbrišete korisnika <b class="text-primary">{{$users->name}}</b>?</h6>
        <i>(Potvrdom će ovaj korisnik biti izbrisan zauvek!!!)</i>
            <form action="/role-delete/{{$users->id}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                <button type="submit" class="btn btn-danger">Obriši</button>
                <a href="/role-register" class="btn btn-secondary">Poništi</a>
                 </form>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('scripts')

@endsection