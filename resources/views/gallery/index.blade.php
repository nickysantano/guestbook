@extends('layout.main')

@section('judul', 'Gallery')
@section('isi_utama')

    <div class="container">

        <form action="{{ route('gallery.create') }}">
            @csrf
            <input type="submit" class="btn btn-primary" value="tambah">
        </form>

        <div class="row row-cols-2">
            @foreach($galleries as $gallery)

                <div class="card" style="width: 18rem">
                    <img src="/" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $gallery->nama }}</h5>
                        <p class="card-text">{{ $gallery->desc }}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>

            @endforeach
        </div>

    </div>

@endsection
