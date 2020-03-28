@extends('layouts.master')

@section('konten')
<div class="container py-4">
	<div class="alert alert-primary" role="alert">
      Detail User : {{$user->name}}
    </div>
    <div class="card">
    	<div class="card-body">
            <p><b>Penulis: {{ $user->name }}</b><br>
              <b>Email: {{ $user->email }}</b>
            </p>
    	</div>
    </div>

    <div class="py-2">
    	<h5>Komentar User</h5>

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
                                <b>Post: {{$comment->post->title}}</b>
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