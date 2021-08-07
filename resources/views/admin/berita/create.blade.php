@extends('admin.app')
@section('pgtitle', 'Tambah berita')
@section('content')
<div style="min-height: 1100px">
    <a href="{{ route('admin.berita') }}">Daftar berita</a>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.berita.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <div class="text-center">
                        <img id="blah" src="#" alt="Preview image here" width="300px" height="200px"/>
                    </div>
                    <br/>
                    <label for="image" class="form-label">Masukkan gambar</label>
                    <input class="form-control form-control-sm" type="file" name="image" id="image" accept="image/*" required>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control form-control-sm" required>
                </div>
                <div class="form-group">
                    <label for="body">Deskripsi</label>
                    <textarea name="body" id="mytextarea" cols="10" rows="20" class="form-control"></textarea>
                </div>
                <div class="float-right">
                    <button type="submit" class="btn btn-primary btn-lg">Simpan berita</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    image.onchange = evt => {
  const [file] = image.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}
</script>
@endsection
