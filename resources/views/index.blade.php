@extends('mainapps')
@section('title')
    Created
@endsection
@section('content')
<section id="header" class="header">
    <div class="container">
        <h1 class="judul-header"><p class="text-secondary-emphasis fw-bold">Selamat Datang Di<br>Blog Najwa</p></h1>
    </div>
</section>

    <!-- card -->
    <section id="blog" class="py-5">
    <div class="container">
         <a href="/createstts" class="btn bg-btn">Tambahkan Blog Anda</a>

    <!-- isi card -->
    @foreach ($posts as $post)
    <div class="card mb-3 mt-3" style="max-width: 100%;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('storage/' . $post->gambar_post) }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">

        <!-- button -->
        <div class="d-flex justify-content-end">
            <button type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-three-dots-vertical"></i>
            </button>
            
            <ul class="dropdown-menu">
                @if (Auth::user()->id == $post->users_id)
                    <li><a class="dropdown-item" href="/edit/{{ $post->id }}">Edit</a></li>
                    <li><a class="dropdown-item" href="/delete/{{ $post->id }}">Dellete</a></li>
                @else
                    <li><a class="dropdown-item" href="">Bagikan</a></li>
                @endif
            </ul>
        </div>

            <h5 class="card-title">{{$post->judul_post}}</h5>
                <p class="card-text">{{$post->isi_post}}</p>
                <p class="card-text">
                    <small class="text-body-secondary">{{ $post->users['name'] }}</small>
                    <a href="" class="btn"><i class="bi bi-hand-thumbs-up"></i>Like</a>
                    <a href="" class="btn"><i class="bi bi-chat-heart"></i>Comment</a>
                </p>

            </div>
        </div>
        </div>
    </div>
    @endforeach

    </div>
    </section>
@endsection