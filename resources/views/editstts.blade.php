@extends('mainapps')
@section('title') Create @endsection
@section('content')
    <div class="container py-3">
        <h3 class="fw-bold">Edit Blog</h3>

        <div class="card">
            <div class="card-body">
               
                <form action="/updateblog/{{ $posts->id }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                    <div class="mb-3">
                    <label for="penulis" class="form-label">Penulis</label>
                        <input type="hidden" class="form-control" id="penulis" name="penulis_post"
                            value="{{ Auth::user()->id }}" >
                        <input type="text" class="form-control" id="penulis"
                            value="{{ Auth::user()->name }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="judul_post" class="form-label">Judul Post</label>
                        <input type="text" class="form-control" id="judul_post" name="judul_post" 
                            value="{{ $posts->judul_post }}">
                    </div>
                    <div class="mb-3">
                        <label for="isi_post" class="form-label">Isi Post</label>
                        <textarea class="form-control" name="isi_post" id="isi_post" cols="30" rows="5">
                            {{ $posts->isi_post }}
                    </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="gambar_post" class="form-label">Gambar Post</label>
                        <input type="file" class="form-control" id="gambar_post" name="gambar_post" accept="image/*">
                        <input type="hidden" name="oldImage" value="{{ $posts->gambar_post }}">
                        <img src="{{ asset('storage/' . $posts->gambar_post) }}" class="img-thumbhnail mt-3" width="30%" alt="Foto">
                    </div>
                    <div class="text-end">
                        <a href="/home" class="btn bg-btn">Kembali</a>
                        <button type="submit" class="btn bg-btn">Update</button>
                    </div>
                </form>

            </div>
        </div>

    </div>
@endsection


