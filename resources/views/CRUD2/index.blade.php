@extends('layout.layout-crud')
@section('title', 'List Akun')
@section('Daf', 'active')
@section('judul','Daftar Akun')

@section('konten')
<div class="container mt-3">
    <div class="row">
        <div class="col-12">

            <div class="py-4">
                <h2>Tabel Pengguna</h2>
            </div>

            @if (session()->has('status'))
            <div class="alert alert-success">
                {{ session()->get('status') }}
            </div>
            @endif

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Email</th>
                        <th>Nama</th>
                        <th>No HP</th>
                        <th>Jenis Kelamin</th>
                        <th>Tahun Lahir</th>
                        <th>Alamat</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($list as $item)
                    <tr>
                        <th>{{$loop->iteration}}</th>
                        <td><a href="{{ route('CRUD-NEW.show', $item) }}">{{$item->email}}</a></td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->no_hp}}</td>
                        <td>{{$item->jenis_kelamin == 'P'?'Perempuan':'Laki-laki'}}</td>
                        <td>{{$item->tahun_lahir}}</td>
                        <td>{{$item->alamat == '' ? 'N/A' : $item->alamat}}</td>
                        <td>
                            <a href="{{ route('CRUD-NEW.edit', $item) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('CRUD-NEW.destroy', $item) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-sm btn-danger" onclick="Swal.fire({
                title: 'Hapus data?',
                showCancelButton: true,
                reverseButtons: true,
              }).then((result) => {
                if (result.value) {
                  this.form.submit();
                }
              })">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <td colspan="8" class="text-center">Tidak ada data...</td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
