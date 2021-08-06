@extends('admin.app')
@section('pgtitle', 'Tambah potensi desa')
@section('content')
<div style="min-height: 600px">
    <div class="card col-md-8">
        <div class="card-body">
            <form action="{{ route('admin.potensi.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="kategori_potensi_desa">Kategori potensi desa</label>
                  <select name="kategori_potensi_desa" id="kategori_potensi_desa" class="form-control">
                      @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Masukkan gambar</label>
                    <input class="form-control form-control-sm" type="file" name="image" id="image" accept="image/*" required>
                </div>
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" name="name" id="name" class="form-control form-control-sm" required>
                </div>
                <div class="form-group">
                    <label for="phone">Telepon</label>
                    <input type="text" name="phone" id="phone" class="form-control form-control-sm" required>
                </div>
                <div class="form-group">
                    <label for="social">Social Media</label>
                    <input type="text" name="social" id="social" class="form-control form-control-sm"
                        placeholder="Facebook: @umkm_jogja">
                </div>
                <div class="form-group">
                    <label for="social1">Social Media 1</label>
                    <input type="text" name="social1" id="social1" class="form-control form-control-sm"
                        placeholder="Instagram: @velvolive_didi">
                </div>
                <div class="float-right">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
