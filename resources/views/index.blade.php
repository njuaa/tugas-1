@extends('mainapps')
@section('title') 
    Index 
@endsection
@section('content')
    <section id="header" class="header">
        <div class="container">
            <h1 class="judul-header"><p class="text-secondary-emphasis fw-bold">Selamat Datang Di<br>Blog Najwa</p></h1>
        </div>
    </section>

    <section class="py-5" id="blog">
        <div class="container">
            <a href="/create" class="btn btn-secondary fw-bold">Tambahkan Blog Anda</a>
            @foreach($posts as $post)
    <div class="card mb-3 mt-3">
            <div class="row g-0">
            <div class="col-md-4">
            <img src="..." class="img-fluid rounded-start" alt="...">
        </div>
    <div class="col-md-8">
      <div class="card-body">
        <div class="d-flex justify-content-end" role="group">
    <button class="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="bi bi-three-dots"></i>
    </button>
    <ul class="dropdown-menu">
        <li><a class="drop-item" href="/editstts/{{$post->id}}">Edit</a></li>
        <li><a class="drop-item" href="delete/{{$posts->id}}">Delete</a></li>
    </ul>
        </div>
        <h5 class="card-title fw-bold">{{$posts->judul_post}}</h5>
        <p class="card-text">{{$posts->isi_post}}</p>
        <p class="card-text">
            <small class="text-body-secondary">{{$post->users['name'] }}</small>
                 <a href="" class="btn"><i class="bi bi-hand-thumbs-op">Like</i></a>
                 <a href="" class="btn"><i class="bi bi-hand-thumbs-op">Comment</i></a></p>
      </div>
            </div>
        </div>
    </div>
        @endforeach
        </div>
    </section>
@endsection