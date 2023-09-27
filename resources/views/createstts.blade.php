@extends('mainapps')
@section('title')
     Create 
@endsection
@section('content')
    <div class="container py-3">
    <h3 class="fw-bold">Tambahkan Blog</h3>
    <div class="card">
        <div class="card-body">
            <form action="/saveblog" method="post" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <label for="penulis" class="form-label">penulis</label>
                    <input type="hidden" class="form-control" id="penulis" name="penulis_post" 
                        value="{{Auth::user()->id}}">
                    <input type="text" class="form-control" id="penulis"
                        value="{{Auth::user()->name}}" disabled>
                </div>
                <div class="mb3">
                    <label for="judul-post" class="form-label">Judul post</label>
                    <input type="text" class="form-control" id="judul-post" name="judul_post" placeholder="judul post">
                </div>
                <div class="mb-3">
                    <label for="isi_post" class="form-label">Isi Post</label>
                    <textarea class="form-control" name="isi_post" id="isi_post" cols="30" rows="5" placeholder="isi post"></textarea>
                </div>
                <div class="mb-3">
                    <label for="gambar_post" class="form-label">Gambar post</label>
                    <input type="file" class="form-control" id="gambar-post" name="gambar_post" accept="image/*">
                </div>
                <div class="text-end">
                    <button type="submit" class="btn bg-btn">post</button>
                </div>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection