@extends('admin.app')
@section('pgtitle', 'Daftar berita')
@section('content')
<div style="min-height: 800px">
    <a href="{{ route('admin.berita.create') }}">Tambah berita</a>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Thumbnail</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th style="width: 120px">Opt.</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ asset('storage/berita/'.$data->photo_path) }}" width="50px" height="50px"></td>
                            <td>{{ $data->title }}</td>
                            <td>{!! Str::words($data->body, '20') !!}</td>
                            <td><a href="{{ route('admin.berita.edit', $data->id) }}">Edit</a> - <a href="{{ route('admin.berita.delete', $data->id) }}">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
