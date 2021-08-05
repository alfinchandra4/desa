@extends('public.partials.app')

@section('pagetitle', 'Layanan')

@section('content')
<div class="layanan container">
    <p class="title">Layanan Desa</p>
    <h4>Bentuk Pelayanan</h4>
    <ul class="list-group fw-light list-group-flush offset-md-4 col-md-4">
        <li class="list-group-item">Pembuatan KTP</li>
        <li class="list-group-item">Daftar KTP</li>
        <li class="list-group-item">Pelatihan Desa</li>
        <li class="list-group-item">Surat Keterangan Lahir</li>
        <li class="list-group-item">Perubahan Data Keluarga</li>
        <li class="list-group-item">Pengurusan Surat Kematian</li>
        <li class="list-group-item">Jaringan Aspirasi</li>
        <li class="list-group-item">Laporan</li>
      </ul>
    <p class="text-center fw-bold">Hubungi Desa Melalui Whatsapp</p>
    <div class="calling">
        <i class="fa fa-whatsapp" aria-hidden="true"></i> 08128918030
    </div>
</div>
@endsection
