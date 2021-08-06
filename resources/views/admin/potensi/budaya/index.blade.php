@extends('admin.app')
@section('pgtitle', 'Potensi desa: Seni & Budaya')
@section('content')
<div class="card">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Img</th>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Social Media</th>
                    <th>Opt.</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ asset('storage/potensi/'.$data->photo_path) }}" width="50px" height="50px"></td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->phone }}</td>
                    <td>{{ $data->social }} - {{ $data->social1 }}</td>
                    <td><a href="{{ route('admin.potensi.delete', $data->id) }}"><i class="fa fa-trash"
                                aria-hidden="true"></i> Remove </a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
