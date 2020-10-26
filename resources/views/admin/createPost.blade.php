@extends('layouts.master') 

@section('title')
   Dashboard | CreatePost
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
   <div class="card bg-light">
     <div class="card-header">
       <h4 class="card-title">Kreiraj novi Post</h4>
     </div>
     <div class="card-body">
       <div class="table-responsive">
         <table class="table">
         {!! Form::open(['action' => 'AdminPostsController@store', 'method' => 'POST']) !!}
             <div class="form-group">
             <input type="hidden" name="post_creator" value="{{ Auth::user()->name }}">
             {{Form::label('postTitle', 'Title:')}}
             {{Form::text('postTitle', ' ', ['class' =>'form-control', 'placeholder' =>'unesite naslov posta'])}}
             </div>
            
             <div class="form-group"> 
             {{Form::label('body', 'Description:')}}
             
               <textarea class="form-control" id="summary-ckeditor" name="body"></textarea>

                 <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                 <script>
                     CKEDITOR.replace( 'summary-ckeditor', {
                         filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                         filebrowserUploadMethod: 'form'
                     });
                 </script>
             </div>
            
             {{Form::submit('Kreiraj post', ['class'=>'btn btn-success'])}}
             <a class="btn btn-secondary" href="{{ URL::previous() }}">Poništi</a>
          {!! Form::close() !!}
         </table>
       </div>
     </div>
   </div>
  </div>
</div>
@endsection