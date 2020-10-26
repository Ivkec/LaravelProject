@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-12">
      <div class="card">
      @include('inc.errors')
        <div class="card-header"> 
          <h1 class="text-center" id="userAcc">Korisnički nalog</h3>
          <h4 class="text-center">Dobrodošao/la <b>{{$user->name}}</b> !</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6 offset-md-3">

            <div class="form-group text-center">
                 <img src="../assets/img/default_avatar.jpg" class="imgUserAcc">
                 <br><br>
            </div>
                 <p>
                    @switch($user->usertype)
                     @case("member")
                     <div class="bg-dark text-center border border-secondary">
                          <b class="text-secondary">KORISNIK</b><br>
                     </div>
                     @break
                     @case('super_member')
                        <div class="bg-dark text-center border border-warning">
                          <b class="text-warning">SUPER KORISNIK</b><br>
                        </div>
                     @break
                     @case('admin')
                        <div class="bg-dark text-center border border-danger">
                           <b class="text-danger">ADMINISTRATOR</b><br>
                        </div>
                        <a href="/dashboard" class="btn btn-danger btn-sm">Admin Panel</a>
                     @break
                    @endswitch
                 </p>

            @if($user->usertype == "member")
              <p>Ime: <b>{{$user->name}}</b></p>
              <p>Telefon: <b>{{$user->phone}}</b></p>
              <p>E-mail: <b>{{$user->email}}</b></p>
              <div class="form-group">
                    <a href="/blog" class="btn btn-secondary">CANCEL</a>
                 </div>   
            @else
              <form action="/user-acc-update/{{$user->id}}" method="POST"> 
                 {{ csrf_field() }}
                 {{ method_field('PUT') }}
                 
                    <label>Ime</label>
                    <input type="text" name="name" value="{{$user->name}}" class="form-control">
                 <div class="form-group">
                    <label>Telefon</label>
                    <input type="text" name="phone" value="{{$user->phone}}" class="form-control">
                 </div>
                 <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" name="email" value="{{$user->email}}" class="form-control">
                 </div>
                 <div class="form-group">
                    
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                    <a href="/blog" class="btn btn-secondary">CANCEL</a>
                 </div>   
              </form>
            @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection