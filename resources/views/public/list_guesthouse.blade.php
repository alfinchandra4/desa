@extends('public.partials.app')

@section('pagetitle', 'Daftar Guest House')

@section('content')
<div class="daftar_guesthouse">
    <p class="title">Daftar Guest House</p>
    <div class="container">
        <div class="row">
            @php
            $datas = App\Models\Potensidesa::where('kategori_potensi_desa_id', 3)->orderByDesc('created_at')->get();
        @endphp
        @foreach ($datas as $data)
        <div class="col-md-4">
            <div class="card mb-3">
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
@endsection
