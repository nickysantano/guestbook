@extends('layouts.app')

@section('judul', 'Make Gallery')
@section('isi_utama')

    <div class="container">

        <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name: </label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>

            <div class="form-group">
                <label for="desc">Description: </label>
                <textarea class="form-control" name="desc" id="desc" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group">
                <label for="picture">Input Picture</label>
                <input type="file" class="form-control-file" name="picture" id="picture">
            </div>
        </form>

    </div>

@endsection
