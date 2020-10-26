@extends('layouts.app')

@section('title')
  GamerSrbija | Blog
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-header" id="newsG"><h1>Gaming Novosti</h1></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(count($userPost)>0) 
                      @foreach($userPost as $row) 
                      <div class="card p-4"> 
                          <h3><b>{{$row->title}}</b></h3>
                          <hr>
                          <div><a href="userPost/{{$row->id}}" class="btn btn-info">Pročitaj više</a></div>
                          <br>
                          <small class="text-muted">Created: {{$row->created_at}}</small><br>
                       </div> 
                       </br> 
                       @endforeach
                       {{$userPost->links()}} 
                      @else 
                       <p> 
                         Ne postoji ni jedan post. 
                       </p> 
                    @endif 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

