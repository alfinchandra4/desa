@extends('public.partials.app')

@section('pagetitle', 'Infografis')

@section('content')
<div class="infografis container">
    <div class="jumbotron">
        <div class="text">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae commodi illo quo veritatis quam
            delectus unde aliquam, laborum praesentium necessitatibus dolorem? Provident voluptatem perferendis aliquam,
            vitae non aperiam quaerat molestiae?
        </div>
        <div class="image">
            <img src="{{ asset('photos/infografis/infografis.png') }}" width="300px" height="300px" />
        </div>
    </div>
    <div class="demografi">
        <p class="text">Demografi Penduduk</p>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $genders = App\Models\Population::get();
                        @endphp
                        @foreach ($genders as $gender)
                            <tr>
                                <td>{{ $gender->gender }}</td>
                                <td>{{ $gender->count }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="pendidikan">
        <p class="text">Pendidikan</p>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Jenis Pendidikan</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $educations = App\Models\Education::get();
                        @endphp
                        @foreach ($educations as $edu)
                            <tr>
                                <td>{{ $edu->education }}</td>
                                <td>{{ $edu->count }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="pekerjaan">
        <p class="text">Pekerjaan</p>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Jenis Pekerjaan</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $professions = App\Models\Profession::get();
                        @endphp
                        @foreach ($professions as $data)
                            <tr>
                                <td>{{ $data->profession }}</td>
                                <td>{{ $data->count }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="kelompok_umur">
        <p class="text">Kelompok Umur</p>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Kelompok Umur</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $ages = App\Models\Agelist::get()
                        @endphp
                        @foreach ($ages as $age)
                            <tr>
                                <td>{{ $age->age }}</td>
                                <td>{{ $age->count }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="agama mb-2">
        <p class="text">Agama</p>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Agama</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $religions = App\Models\Religion::all();
                        @endphp
                        @foreach ($religions as $rel)
                            <tr>
                                <td>{{ $rel->religion }}</td>
                                <td>{{ $rel->count }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
