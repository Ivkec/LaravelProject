@extends('layouts.master')

@section('title')
  Dashboard | UpdateUser
@endsection

@section('content')

  <div class="container">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="text-center">Edituj Data za Registrovanog Korisnika</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6 offset-md-3">
              <form action="/role-register-update/{{$users->id}}" method="POST"> 
                 {{ csrf_field() }}
                 {{ method_field('PUT') }}
                 
                 <div class="form-group">
                    <label>Ime</label>
                    <input type="text" name="username" value="{{$users->name}}" class="form-control">
                 </div>
                 <div class="form-group">
                    <label>Telefon</label>
                    <input type="text" name="phone" value="{{$users->phone}}" class="form-control">
                 </div>
                 <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" name="email" value="{{$users->email}}" class="form-control">
                 </div>
                 <div class="form-group">
                    <label>Role</label>
                    <select name="usertype" class="form-control">
                    <option value="member">Normal-member</option>
                    <option value="super_member">Super-member</option>
                    <option value="admin">Admin</option>
                    </select>
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                    <a href="/role-register" class="btn btn-secondary">CANCEL</a>
                 </div>   
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('scripts')

@endsection