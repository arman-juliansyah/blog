@extends('layouts.master')

@section('konten')
<div class="container py-4">
  <div class="alert alert-primary" role="alert">
    Selamat Datang Di List User 
  </div>

  <div class="row">
    @foreach($users as $user)
    <div class="col-md-4" style="margin-bottom: 20px"> 
        <div class="card">
          <div class="card-body">
            <p><b>Penulis: {{ $user->name }}</b><br>
              <b>Email: {{ $user->email }}</b>
            </p>
            <a href="{{ url('user',$user->id)}}" class="btn btn-primary">Lihat Komentar</a>
          </div>
          
        </div>
    </div>
    @endforeach
    <div class="col-md-12">
      {{$users->links()}}
    </div>
  </div>      
</div>
@endsection