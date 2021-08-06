@extends('admin.app')
@section('pgtitle', 'Infografis: Pekerjaan')
@section('content')
<div class="row">
    <div class="col-md-7">
        <div class="card">
            <div class="card-body">
                <h5>Jenis Pekerjaan</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Pekerjaan</th>
                            <th>Jumlah</th>
                            <th>Opt.</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($professions as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->profession }}</td>
                            <td>{{ $data->count }}</td>
                            <td><a href="{{ route('admin.infografis.pekerjaan.delete', $data->id) }}"><i class="fa fa-trash" aria-hidden="true"></i> Remove</a></td>
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
                <h5>Tambah pekerjaan</h5>
                <form action="{{ route('admin.infografis.pekerjaan.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="profession">Pekerjaan</label>
                        <input type="text" name="profession" class="form-control" required>
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
