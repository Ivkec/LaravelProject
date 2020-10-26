@extends('layouts.master')

@section('title')
  Dashboard | AllUsers
@endsection

@section('content')

<div class="row">
  <div class="col-md-12">
   <div class="card">
     <div class="card-header">
       <h4 class="card-title">Registered Roles</h4>
       @if (session('status'))
           <div class="alert alert-success" role="alert">
               {{ session('status') }}
           </div>
        @endif
     </div>
     <div class="card-body">
       <div class="table-responsive">
         <table class="table">
           <thead class=" text-primary">
             <tr>
             <td>
                 User ID
               </td>
               <td>
                 Ime / Nick
               </td>
               <td>
                 Telefon
               </td>
               <td>
                 E-mail
               </td>
               <td>
                 E-mail verifikacija
               </td>
               <td>
                 Role
               </td>
               <td>
                 Edit
               </td>
               <td>
                 Delete
               </td>
             </tr>
           </thead>
          @foreach($users as $row)
          <tbody>
          <th>
               {{$row->id}}
             </th>
          <th>
               {{$row->name}}
             </th>
             <th>
              {{$row->phone}}
             </th>
             <th>
              {{$row->email}}
             </th>
             <th>
             @if($row->email_verified_at)
              <p>verifikovan</p>
             @else
             <p>NIJE_verifikovan</p>
             @endif
             </th>
             <th>
             @switch($row->usertype)
                     @case('member')
                     <p class='text-secondary'>{{$row->usertype}}</p>
                     @break
                     @case('super_member')
                     <p class='text-warning'>{{$row->usertype}}</p>
                     @break
                     @case('admin')
                     <p class='text-danger'>{{$row->usertype}}</p>
                     @break
             @endswitch
             </th>
             <th>
                <a href="/role-edit/{{$row->id}}" class="btn btn-info">EDITUJ</a>
             </th>
             <th>
             <a href="/role-destroy/{{$row->id}}" class="btn btn-danger">OBRIŠI</a>
             </th>      
           @endforeach
           </tbody>
         </table>
       </div>
     </div>
   </div>
   {{$users->links()}}
  </div>
</div>

@endsection

@section('scripts')

@endsection