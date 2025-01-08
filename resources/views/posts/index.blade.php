@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Tabel</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-success mb-3">Buat Post Baru</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Slug</th>
                    <th>Konten</th>
                    <th>Gambar</th>
                    <th>Hits</th>
                    <th>Aktif</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->slug }}</td>
                        <td>{{ Str::limit($post->content, 50) }}</td>
                        <td><img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" width="50"></td>
                        <td>{{ $post->hits }}</td>
                        <td>{{ $post->aktif }}</td>
                        <td>{{ $post->status }}</td>
                        <td>
                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection