@extends('layouts.app') 
 
@section('title')
  Post | {{$onePost->title}}
@endsection
@section('content') 
 </br></br> 
 <div class="row justify-content-center">
        <div class="col-md-10 col-lg-10 col-sm-12">
   <div class="card">
       <div class="card-header border-light"> 
         <h2><b>{{$onePost->title}}</b></h2>
       </div> 
    
     <div class="card-body"> 
         {!!$onePost->body!!}
     <hr> 
     <div class="post_info_style">
        <label>Creator: 
        <span class="post_usr_style">{{$onePost->post_creator}}
        <i class="now-ui-icons users_single-02"></i>
        </label></span>
        <br><br>
        <a class="btn btn-primary" href="{{ URL::previous() }}">Nazad</a> 
      </div>
    </div>
    </div>
    </div> 
</div>
</div>
@endsection
