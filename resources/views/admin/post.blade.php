@extends('layouts.master') 

@section('title')
  Dashboard | AllPosts
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
   <div class="card bg-light">
     <div class="card-header">
       <h4 class="card-title">Postovi</h4>
     </div>
     <div class="card-body">
       <div class="table-responsive">
       <a class="btn btn-info btn-sm" href="{{url('posts/create')}}">&#10010; Kreiraj novi post</a><br><br>
         <table class="table">
         @if(count($posts)>0) 
           @foreach($posts as $row) 
           <div class="card p-4"> 
              <h3><b>{{$row->title}}</b></h3>
              
              <a href="posts/{{$row->id}}" class="btn btn-info">Pročitaj više</a> 
              <br>
              <small class="text-muted">Created: {{$row->created_at}}</small><br>
          
              @if($row->created_at != $row->updated_at)
                <small class="text-info">Last edited: {{$row->updated_at}}</small>
              @endif
           
              <br><hr>
              <a href="/post-edit/{{$row->id}}" class="btn btn-sm btn-muted">Edituj</a>
              <a href="/post-destroy-confirm/{{$row->id}}" class="btn btn-sm btn-danger">Obriši</a>
           </div> 
           </br> 
           @endforeach
           {{$posts->links()}}
          @else 
           <p> 
             Trenutno ne postoji ni jedan post. 
           </p> 
         @endif 
         </table>
       </div>
     </div>
   </div>
  </div>
</div>
@endsection