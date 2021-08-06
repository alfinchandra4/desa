@extends('admin.app')
@section('pgtitle', 'Infografis: Pendidikan')
@section('content')
<div class="row">
    <div class="col-md-7">
        <div class="card">
            <div class="card-body">
                <h5>Tingkat Pendidikan</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Pendidikan</th>
                            <th>Jumlah</th>
                            <th>Opt.</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($educations as $edu)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $edu->education }}</td>
                            <td>{{ $edu->count }}</td>
                            <td><a href="{{ route('admin.infografis.pendidikan.delete', $edu->id) }}"><i class="fa fa-trash" aria-hidden="true"></i> Remove</a></td>
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
                <h5>Tambah tingkat pendidikan</h5>
                <form action="{{ route('admin.infografis.pendidikan.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="education">Pendidikan</label>
                        <input type="text" name="education" class="form-control" required>
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
