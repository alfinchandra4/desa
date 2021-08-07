@extends('admin.app')
{{-- @section('pgtitle', 'Create Order') --}}
@section('content')
<div>
    <h2 class="font-weight-bold text-center">Selamat datang di Sistem Informasi Desa</h2>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4">
                <h5>Berita Desa</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="{{ route('admin.berita') }}">Daftar Berita desa</a></li>
                    <li class="list-group-item"><a href="{{ route('admin.berita.create') }}">Tambah berita</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Potensi Desa</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="{{ route('admin.infografis.umkm') }}">UMKM</a></li>
                    <li class="list-group-item"><a href="{{ route('admin.infografis.wisata') }}">Wisata</a></li>
                    <li class="list-group-item"><a href="{{ route('admin.infografis.budaya') }}">Seni & Budaya</a></li>
                    <li class="list-group-item"><a href="{{ route('admin.infografis.guest_house') }}">Guest House</a></li>
                    <li class="list-group-item"><a href="{{ route('admin.potensi.create') }}">Tambah potensi desa</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Infografis</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="{{ route('admin.infografis.demografi') }}">Demografi Penduduk</a></li>
                    <li class="list-group-item"><a href="{{ route('admin.infografis.pendidikan') }}">Pendidikan</a></li>
                    <li class="list-group-item"><a href="{{ route('admin.infografis.pekerjaan') }}">Pekerjaan</a></li>
                    <li class="list-group-item"><a href="{{ route('admin.infografis.umur') }}">Kelompok Umur</a></li>
                    <li class="list-group-item"><a href="{{ route('admin.infografis.agama') }}">Agama</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
