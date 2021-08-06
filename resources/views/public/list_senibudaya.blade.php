@extends('public.partials.app')

@section('pagetitle', 'Daftar Seni Budaya')

@section('content')
<div class="daftar_senibudaya">
    <p class="title">Daftar Seni Budaya</p>
    <div class="container">
        <div class="row">
            @for ($i = 0; $i < 7; $i++)
            <div class="col-md-3">
                <div class="card mb-3">
                    <img src="https://www.w3schools.com/html/img_girl.jpg" class="card-img-top">
                    <div class="name">Keripik Pisang</div>
                    <div class="phone">08128918030</div>
                    <div class="social1">IG: @ulfafadianadsdasd</div>
                    <div class="social2">FB: Diana</div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>
@endsection
