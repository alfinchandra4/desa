@extends('admin.app')
@section('pgtitle', 'Infografis: Agama')
@section('content')
<div class="row">
    <div class="col-md-7">
        <div class="card">
            <div class="card-body">
                <h5>Daftar Agama</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Agama</th>
                            <th>Jumlah</th>
                            <th>Opt.</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($religions as $rel)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $rel->religion }}</td>
                            <td>{{ $rel->count }}</td>
                            <td><a href="{{ route('admin.infografis.agama.delete', $rel->id) }}"><i class="fa fa-trash" aria-hidden="true"></i> Remove</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <h5>Tambah Agama</h5>
                <form action="{{ route('admin.infografis.agama.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="religion">Agama</label>
                        <input type="text" name="religion" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="religion">Jumlah</label>
                        <input type="text" name="count" class="form-control" required>
                    </div>
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary btn-lg">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
