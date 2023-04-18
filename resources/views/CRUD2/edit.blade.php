@extends('layout.layout-crud')
@section('title', 'List Akun')
@section('Daf', 'active')
@section('judul','Daftar Akun')

@section('konten')
<div class="container pt-4 bg-white mb-5">
    <div class="row">
        <div class="col-md-8 col-xl-6">
            <h1>Edit data</h1>
            <hr>


            <form action="{{ route('CRUD-NEW.update', $data) }}" method="POST">
                @method('PATCH')
                @csrf
                {{-- nama lengkap --}}
                <div class="form-group">
                    <label for="nama">nama lengkap</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                        value="{{ old('nama') ?? $data->nama }}">
                    @error('nama')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{-- no hp --}}
                <div class="form-group">
                    <label for="no_hp">no hp</label>
                    <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp"
                        value="{{ old('no_hp') ?? $data->no_hp }}">
                    @error('no_hp')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{-- jenis kelamin --}}
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="L" {{ (old('jenis_kelamin') ?? $data->jenis_kelamin)
                        == 'L' ? 'checked': '' }}>
                            <label class="form-check-label" for="laki_laki">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P" {{ (old('jenis_kelamin') ?? $data->jenis_kelamin)
                        == 'P' ? 'checked': '' }}>
                            <label class="form-check-label" for="perempuan">Perempuan</label>
                        </div>
                        @error('jenis_kelamin')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- tahun kelahiran --}}
                <div class="form-group">
                    <label for="tahun_lahir">tahun kelahiran</label>
                    <input type="text" class="form-control @error('tahun_lahir') is-invalid @enderror" id="tahun"
                        name="tahun_lahir" value="{{ old('tahun_lahir') ?? $data->tahun_lahir }}">
                    @error('tahun_lahir')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{-- email --}}
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                        value="{{ old('email') ?? $data->email}}">
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{-- pass --}}
                <div class="form-group">
                    <label for="password">kata sandi</label>
                    <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" name="password"
                        value="{{ old('password') ?? $data->password}}">
                    @error('password')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{-- alamat --}}
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" rows="3"
                        name="alamat">{{ old('alamat') ?? $data->alamat}}</textarea>
                    @error('alamat')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mb-5 mt-2">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection
