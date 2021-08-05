@extends('public.partials.app')

@section('pagetitle', 'Profil')

@section('content')
<div class="profil">
    <div class="banner">
        <p class="text">
            Profil Desa
        </p>
    </div>

    <div class="desa container">
        <div class="box">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('photos/profile/visi_misi.png') }}">
                        <p>Visi dan Misi</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('photos/profile/pemerintah_desa.png') }}" >
                        <p>Pemerintah Desa</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('photos/profile/sejarah.png') }}">
                        <p>Sejarah Desa</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('photos/profile/galeri.png') }}">
                        <p>Galeri</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('photos/profile/kelembagaan.png') }}">
                        <p>Kelembagaan</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('photos/profile/produk_tani.png') }}">
                        <p>Produk Tani</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('photos/profile/raker.png') }}">
                        <p>Rencana Kerja</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('photos/profile/produk_hukum.png') }}">
                        <p>Produk Hukum</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('photos/profile/anggaran.png') }}">
                        <p>Anggaran</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
