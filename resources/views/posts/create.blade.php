@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Buat Data Baru</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" name="slug" id="slug" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="content">Konten</label>
                <textarea name="content" id="content" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="image">Gambar</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">SUBMIT</button>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection