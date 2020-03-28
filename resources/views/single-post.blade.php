@extends('layouts.master')

@section('konten')
<div class="container py-4">
	<div class="alert alert-primary" role="alert">
      Detail Post : {{$post->title}}
    </div>
    <div class="card">
    	<div class="card-body">
    		<h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{$post->content}}</p>
            <p>
              <b>Penulis: {{ $post->user->name }}</b><br>
              <b>Email: {{ $post->user->email }}</b><br>
              <b>Created Date: {{ $post->created_at }}</b>
            </p>
    	</div>
    </div>

    <div class="py-2">
    	<h5>{{$comments->count()}} Komentar Guest</h5>

    	<div class="row">
    		@foreach($comments as $comment)
    		<div class="col-md-12" style="margin-bottom: 20px">
    			<div class="card">
			    	<div class="card-body">
			            <div class="row">
			            	<div class="col-md-12">
			            		<b>Nama: {{$comment->name}}</b>
			            	</div>
			            	<div class="col-md-12">
			            		<b>Email: {{$comment->email}}</b>
			            	</div>
			            	<div class="col-md-12">
			            		<b>Website: {{$comment->website}}</b>
			            	</div>
			            	<div class="col-md-12">
			            		{{$comment->comment}}
			            	</div>
			            </div>
			    	</div>
			    </div>
    		</div>
    		@endforeach
    	</div>
    </div>
</div>
@endsection