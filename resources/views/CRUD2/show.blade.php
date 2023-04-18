@extends('layout.layout-crud')
@section('title', "Biodata")
@section('Daf', 'active')
{{-- @section('judul','{{ $data->nama }}') --}}

@section('konten')
<div class="container mt-3">
    <div class="row">
        <div class="col-12">

            <div class="pt-3">
                <h1 class="h2 mr-auto">Biodata {{$data->nama}}</h1>
            </div>
            <hr>

            <ul>
                <li>Nama: {{$data->nama}} </li>
                <li>Kelahiran: {{$data->tahun_lahir}} </li>
                <li>Jenis Kelamin:
                    {{$data->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki'}}
                </li>
                <li>No HP: {{$data->no_hp}} </li>
                <li>email: {{$data->email}} </li>
                <li>Alamat:
                    {{$data->alamat == '' ? 'N/A' : $data->alamat}}
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection
