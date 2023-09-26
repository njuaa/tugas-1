@extends('mainapps')
@section('title')
     Edit
@endsection
@section('content')
    <div class="container py-3">
    <h3 class="fw-bold">Tambahkan Blog</h3>
    <div class="card">
        <div class="card-body">
            <form action="post" action="/saveblog" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="penulis" class="form-label">penulis</label>
                    <input type="text" class="form-control" id="penulis" name="penulis_post" value="{{$post->isi_post}}">
                </div>
                <div class="mb3">
                    <label for="judul-post" class="form-label">Judul post</label>
                    <input type="text" class="form-control" id="judul-post" name="judul_post" value="{{$post->judul_post}}">
                </div>
                <div class="mb-3">
                    <label for="isi-post" class="form-label">isi post</label>
                    <textarea class="form-control" name="isi_post" id="isi-post" cols="30" rows="5" name="judul_post" placeholder="isi post">
                    </textarea>  
                </div>
                <div class="mb-3">
                    <label for="gambar_post" class="form-label">Gambar post</label>
                    <input type="file" class="form-control" id="gambar-post" name="gambar_post" accept="image/*">
                </div>
                <div class="text-end">
                    <button class="post" class="btn btn-secondary">post</button>
                </div>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection