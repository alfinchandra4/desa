@extends('public.partials.app')

@section('pagetitle', 'Detail')

@section('content')
<div class="detail_berita" style="min-height: 500px">
    <div class="banner">
        <img class="thumbnail" src="{{ asset('storage/berita/'.$berita->photo_path) }}"/>
    </div>
    <div class="properties offset-md-3 col-md-6">
        <div class="title fw-bold">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate, nesciunt? Eum, esse!
        </div>
        <div class="author">
            <i class="fa fa-clock-o" aria-hidden="true"></i> {{ date('l, d M Y', strtotime($berita->created_at)) }} | <i class="fa fa-user" aria-hidden="true"></i> Oleh Admin
        </div>
        <div class="description">
            {!! $berita->body !!}
        </div>
    </div>
</div>
@endsection
