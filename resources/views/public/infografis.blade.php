@extends('public.partials.app')

@section('pagetitle', 'Infografis')

@section('content')
<div class="infografis container">
    <div class="jumbotron">
        <div class="text">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae commodi illo quo veritatis quam
            delectus unde aliquam, laborum praesentium necessitatibus dolorem? Provident voluptatem perferendis aliquam,
            vitae non aperiam quaerat molestiae?
        </div>
        <div class="image">
            <img src="{{ asset('photos/infografis/infografis.png') }}" width="300px" height="300px" />
        </div>
    </div>
    <div class="demografi">
        <p class="text">Demografi Penduduk</p>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Laki-laki</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Perempuan</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="pendidikan">
        <p class="text">Pendidikan</p>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Jenis Pendidikan</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="pekerjaan">
        <p class="text">Pekerjaan</p>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Jenis Pekerjaan</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <div class="kelompok_umur">
        <p class="text">Kelompok Umur</p>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>Kelompok Umur</th>
                        <th>Jumlah</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="agama mb-2">
        <p class="text">Agama</p>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>Agama</th>
                        <th>Jumlah</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
