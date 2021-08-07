@extends('admin.app')
@section('pgtitle', 'Ubah berita')
@section('content')
<div style="min-height: 1100px">
    <a href="{{ route('admin.berita') }}">Daftar berita</a>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.berita.update', $berita->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <div class="text-left float-left">
                        <img src="{{ asset('storage/berita/'.$berita->photo_path) }}" width="300px" height="200px" />
                        <p>Gambar Saat ini</p>
                    </div>
                    <div class="text-center">
                        <img id="blah" src="{{ asset('storage/berita/'.$berita->photo_path) }}" width="300px" height="200px" />
                        <p>Gambar terbaru</p>
                    </div>
                    <br />
                    <label for="image" class="form-label">Masukkan gambar</label>
                    <input class="form-control form-control-sm" type="file" name="image" id="image" accept="image/*">
                    <a href="#" class="delimg">Hapus gambar</a>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control form-control-sm" required
                        value="{{ $berita->title }}">
                </div>
                <div class="form-group">
                    <label for="body">Deskripsi</label>
                    <textarea name="body" id="mytextarea" cols="10" rows="20"
                        class="form-control">{!! $berita->body !!}</textarea>
                </div>
                <div class="float-right">
                    <button type="submit" class="btn btn-primary btn-lg">Ubah berita</button>
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
<script>
    document.querySelector('.delimg').addEventListener('click', function() {
        var inputimg = document.getElementById('image');
        var blah = document.getElementById('blah');
        inputimg.value = "";
        blah.src = "{{ asset('storage/berita/'.$berita->photo_path) }}";
    });

</script>
@endsection
