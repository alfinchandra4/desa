@extends('public.partials.app')

@section('pagetitle', 'Index')

@section('content')
<div class="homepage">
    <div class="banner">
        <p class="text">
            Selamat datang <br /> di desa kusuma
        </p>
    </div>

    <div class="berita container" style="justify-content: center;">
        <p class="text">Berita Desa</p>
        <div style="display:flex; gap: 10px" class="collection">
            <div style="flex: 1">
                <div class="card">
                    <img src="https://www.w3schools.com/html/img_chania.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <div class="card-date-created">20 July 2021</div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn" style="float: right;">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div style="flex: 1">
                <div class="card">
                    <img src="https://www.w3schools.com/html/img_chania.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <div class="card-date-created">20 July 2021</div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn" style="float: right;">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div style="flex: 1">
                <div class="card">
                    <img src="https://www.w3schools.com/html/img_chania.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <div class="card-date-created">20 July 2021</div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn" style="float: right;">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5" style="display:block;text-align:center">
            <a href="#" class="btn btn-warning text-white">Berita Lain</a>
        </div>
    </div>

    <div class="luas">
        <p class="text">Luas</p>
        <p>10.000.000 m<sup>2</sup></p>
    </div>

    <div class="populasi">
        <p class="text">Populasi</p>
        <div style="display: flex;" class="text-center">
            <div style="flex: 1;">
                <span class="number">3500</span><br />
                <span class="text-white">Penduduk</span>
            </div>
            <div style="flex: 1;">
                <span class="number">1200</span><br />
                <span class="text-white">Laki-laki</span>
            </div>
            <div style="flex: 1;">
                <span class="number">1300</span><br />
                <span class="text-white">Perempuan</span>
            </div>
        </div>
        <div class="text-center p-4">
            <a href="#" class="btn text-white" style="background-color: #67D065">Infografis</a>
        </div>
    </div>

    <div class="potensi container">
        <p class="text mb-5">Potensi Desa</p>
        <div style="display:flex; gap: 10px" class="collection">
            <div class="card">
                <img src="https://www.w3schools.com/html/img_chania.jpg" class="card-img-top">
                <div class="card-body bg-light">
                    <p class="card-text">Seni Budaya</p>
                </div>
            </div>
            <div class="card">
                <img src="https://www.w3schools.com/html/img_chania.jpg" class="card-img-top">
                <div class="card-body bg-light">
                    <p class="card-text">Seni Budaya</p>
                </div>
            </div>
            <div class="card">
                <img src="https://www.w3schools.com/html/img_chania.jpg" class="card-img-top">
                <div class="card-body bg-light">
                    <p class="card-text">Seni Budaya</p>
                </div>
            </div>
            <div class="card">
                <img src="https://www.w3schools.com/html/img_chania.jpg" class="card-img-top">
                <div class="card-body bg-light">
                    <p class="card-text">Seni Budaya</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
