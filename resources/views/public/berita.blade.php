@extends('public.partials.app')

@section('pagetitle', 'Berita Desa')

@section('content')
<div class="berita_desa">
    <p class="title">Berita Desa</p>
    <div class="container">
        <div class="row">
            @php
                $news = App\Models\Berita::orderByDesc('created_at')->get();
            @endphp
            @foreach ($news as $data)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('storage/berita/'.$data->photo_path) }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 1.1em">{{ $data->title }}</h5>
                        <div class="card-date-created" style="font-size: .9em"> <i class="fa fa-clock-o" aria-hidden="true"></i> 20 July 2021</div>
                        <p class="card-text">{!! \Str::words($data->body, 20) !!}</p>
                        <a href="{{ route('admin.berita.detail', $data->id) }}" class="btn" style="float: right;">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</div>
@endsection
