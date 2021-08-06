@extends('admin.app')
@section('pgtitle', 'Infografis: Demografi Penduduk')
@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5>Populasi</h5>
                <form action="{{ route('admin.infografis.demografi.update') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="man">Jumlah Pria</label>
                        <input type="text" name="man" class="form-control" value="{{ $genders[0]['count'] }}" required>
                    </div>
                    <div class="form-group">
                        <label for="woman">Jumlah Wanita</label>
                        <input type="text" name="woman" class="form-control" value="{{ $genders[1]['count'] }}" required>
                    </div>
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary btn-lg">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
