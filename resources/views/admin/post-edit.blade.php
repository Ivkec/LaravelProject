@extends('layouts.master')

@section('title')
  Dashboard | UpdateyPost
@endsection
@section('content')
  <div class="container">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="text-center">Edituj podatke posta</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <form action="/posts/{{$post->id}}" method="POST"> 
                 {{ csrf_field() }}
                 {{ method_field('PUT') }}
                 
                 <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" value="{{$post->title}}" class="form-control">
                 </div>
                 <div class="form-group">
                    <label>Body</label>
                    <textarea class="form-control" id="summary-ckeditor" name="body">{!!$post->body!!}</textarea>

                 <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                 <script>
                     CKEDITOR.replace( 'summary-ckeditor', {
                         filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                         filebrowserUploadMethod: 'form'
                     });
                 </script>
                 </div>

                    <button type="submit" class="btn btn-primary">Ažuriraj</button>
                    <a href="/posts" class="btn btn-secondary">Poništi</a>
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

