@extends('public.partials.app')

@section('pagetitle', 'Daftar Umkm')

@section('content')
<div class="daftar_umkm">
    <p class="title">UMKM</p>
    <div class="container">
        <div class="row">
            @php
            $umkms = App\Models\Potensidesa::where('kategori_potensi_desa_id', 1)->orderByDesc('created_at')->get();
        @endphp
        @foreach ($umkms as $umkm)
        <div class="col-md-4">
            <div class="card mb-3">
                <img src="{{ asset('storage/potensi/'.$umkm->photo_path) }}" class="card-img-top">
                <div class="name">{{ $umkm->name }}</div>
                <div class="phone">{{ $umkm->phone }}</div>
                <div class="social1">{{ $umkm->social }}</div>
                <div class="social2">{{ $umkm->social1 }}</div>
            </div>
        </div>
        @endforeach
        </div>
    </div>
</div>
@endsection
