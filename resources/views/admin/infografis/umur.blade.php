@extends('admin.app')
@section('pgtitle', 'Infografis: Kelompok Umur')
@section('content')
<div class="row">
    <div class="col-md-7">
        <div class="card">
            <div class="card-body">
                <h5>Kelompok Umur</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kel. Umur</th>
                            <th>Jumlah</th>
                            <th>Opt.</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ages as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->age }}</td>
                            <td>{{ $data->count }}</td>
                            <td><a href="{{ route('admin.infografis.umur.delete', $data->id) }}"><i class="fa fa-trash" aria-hidden="true"></i> Remove</a></td>
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
                <h5>Tambah kelompok umur</h5>
                <form action="{{ route('admin.infografis.umur.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="age">Kelompok umur</label>
                        <input type="text" name="age" id="age" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="count">Jumlah</label>
                        <input type="text" name="count" id="count" class="form-control" required>
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
