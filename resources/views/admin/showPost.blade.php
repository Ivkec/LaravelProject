@extends('layouts.master') 
 
@section('title')
  Post | {{$onePost->title}}
@endsection

@section('content') 
 </br></br> 

    <div class="card-header border-light"> 
      <h2><b>{{$onePost->title}}</b></h2>
    </div> 
 
  <div class="card-body"> 
      {!!$onePost->body!!}
  </div> 
  <hr> 
  <div class="post_info_style">
     <label>Creator: 
     <span class="post_usr_style">{{$onePost->post_creator}}
     <i class="now-ui-icons users_single-02"></i>
     </label></span><br>
     <small>Posted: {{$onePost->created_at}}</small><br>
     @if($onePost->created_at != $onePost->updated_at)
                <small class="text-info">Last edited: {{$onePost->updated_at}}</small>
     @endif
     <br><br>
     <a class="btn btn-primary" href="{{ URL::previous() }}">Nazad</a> 
   </div>
 </div> 
@endsection

