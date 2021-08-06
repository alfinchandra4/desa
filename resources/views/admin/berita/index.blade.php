@extends('admin.app')
@section('pgtitle', 'Daftar berita')
@section('content')
<div style="min-height: 800px">
    <a href="{{ route('admin.berita.create') }}">Tambah berita</a>
    <div class="card">
        <div class="card-body">

        </div>
    </div>
</div>
@endsection
