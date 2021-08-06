@extends('public.partials.app')

@section('pagetitle', 'Berita Desa')

@section('content')
<div class="berita_desa">
    <p class="title">Berita Desa</p>
    <div class="container">
        <div class="row">
            @for ($i = 0; $i < 10; $i++)
            <div class="col-md-4">
                <div class="card">
                    <img src="https://www.w3schools.com/html/img_girl.jpg" class="card-img-top" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <div class="card-date-created">20 July 2021</div>
                        <p class="text card-text">Some quick example text to build on the card title and make up the
                            bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm" style="float: right;">Selengkapnya</a>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>
@endsection
