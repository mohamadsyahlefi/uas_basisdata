@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Post</h1>

        <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $post->title) }}" required>
            </div>

            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug', $post->slug) }}" required>
            </div>

            <div class="form-group">
                <label for="content">Konten</label>
                <textarea name="content" id="content" class="form-control" required>{{ old('content', $post->content) }}</textarea>
            </div>

            <div class="form-group">
                <label for="image">Gambar</label>
                <input type="file" name="image" id="image" class="form-control">
                <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" width="100" class="mt-2">
            </div>

            <input type="hidden" name="user_id" value="{{ Auth::id() }}">

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
