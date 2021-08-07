@extends('public.partials.app')

@section('pagetitle', 'Potensi Desa')

@section('content')
<div class="potensi_desa">
    <p class="title">Potensi Desa</p>
    <div class="umkm">
        <p class="title">UMKM</p>
        <div class="container">
            <div class="row">
                @php
                $datas = App\Models\Potensidesa::where('kategori_potensi_desa_id',1)->orderByDesc('created_at')->take(3)->get();
                @endphp
                @foreach ($datas as $data)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('storage/potensi/'.$data->photo_path) }}" class="card-img-top">
                        <div class="name">{{ $data->name }}</div>
                        <div class="phone">{{ $data->phone }}</div>
                        <div class="social1">{{ $data->social }}</div>
                        <div class="social2">{{ $data->social1 }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="mt-3" style="display:block;text-align:center">
            <a href="{{ route('potensi_umkm') }}" class="btn btn-primary">Semua Umkm</a>
        </div>
    </div>
    <div class="wisata">
        <p class="title">Wisata</p>
        <div class="collection container">
            <div class="container">
                <div class="row">
                    @php
                    $datas = App\Models\Potensidesa::where('kategori_potensi_desa_id',
                    2)->orderByDesc('created_at')->take(3)->get();
                    @endphp
                    @foreach ($datas as $data)
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ asset('storage/potensi/'.$data->photo_path) }}" class="card-img-top">
                            <div class="name">{{ $data->name }}</div>
                            <div class="phone">{{ $data->phone }}</div>
                            <div class="social1">{{ $data->social }}</div>
                            <div class="social2">{{ $data->social1 }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="mt-3" style="display:block;text-align:center">
            <a href="{{ route('potensi_wisata') }}" class="btn btn-primary">Semua Wisata</a>
        </div>
    </div>
    <div class="guest_house">
        <p class="title">Guest House</p>
        <div class="container">
            <div class="row">
                @php
                $datas = App\Models\Potensidesa::where('kategori_potensi_desa_id',
                3)->orderByDesc('created_at')->take(3)->get();
                @endphp
                @foreach ($datas as $data)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('storage/potensi/'.$data->photo_path) }}" class="card-img-top">
                        <div class="name">{{ $data->name }}</div>
                        <div class="phone">{{ $data->phone }}</div>
                        <div class="social1">{{ $data->social }}</div>
                        <div class="social2">{{ $data->social1 }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="mt-3" style="display:block;text-align:center">
            <a href="{{ route('potensi_guest_house') }}" class="btn btn-primary">Semua Guest House</a>
        </div>
    </div>
    <div class="seni_budaya">
        <p class="title">Seni Budaya</p>
        <div class="container">
            <div class="row">
                @php
                $datas = App\Models\Potensidesa::where('kategori_potensi_desa_id',
                4)->orderByDesc('created_at')->take(3)->get();
                @endphp
                @foreach ($datas as $data)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('storage/potensi/'.$data->photo_path) }}" class="card-img-top">
                        <div class="name">{{ $data->name }}</div>
                        <div class="phone">{{ $data->phone }}</div>
                        <div class="social1">{{ $data->social }}</div>
                        <div class="social2">{{ $data->social1 }}</div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="mt-3" style="display:block;text-align:center">
                <a href="{{ route('potensi_seni_budaya') }}" class="btn btn-primary">Semua Seni Budaya</a>
            </div>
        </div>
    </div>
</div>
@endsection
