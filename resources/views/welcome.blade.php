@extends('layouts.master')

@section('konten')
<div class="container py-4">
  @if($message = Session::get('success'))
    <div class="alert alert-primary">
      <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
    </div>
  @endif

  <div class="row">
    @foreach($posts as $post)
    <div class="col-md-4" style="margin-bottom: 20px"> 
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">{!! substr($post->title, 0, 20) !!}</h5>
            <p class="card-text">{!! substr($post->content, 0, 100) !!} ...</p>
            <p><b>Penulis: {{ $post->user->name }}</b><br>
              <b>Email: {{ $post->user->email }}</b>
            </p>
            <a href="{{ url('post',$post->slug)}}" class="btn btn-primary">Lihat</a>
          </div>
         
        </div>
    </div>
    @endforeach
    <div class="col-md-12">
      {{$posts->links()}}
    </div>
  </div>      
</div>
@endsection