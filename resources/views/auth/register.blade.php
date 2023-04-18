<!doctype html>
<html lang="en">

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <link rel="stylesheet" href="/register.css">
        <link rel="stylesheet" href="/color.css">
        <link rel="icon" href="/assets/logofix-bulat.png" />
        <title>temancemas.id | Buat Akun</title>
    </head>

<body>
    <div class="wrapper">
        <div class="container"><br><br>
            <div class="text-center name">
                temancemas.id
            </div>
            <form action="{{ url('/register') }}" method="POST">
                @csrf
                {{-- nama lengkap --}}
                <div class="form-group">
                    <label for="nama">nama lengkap</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                        value="{{ old('nama') }}">
                    @error('nama')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{-- no hp --}}
                <div class="form-group">
                    <label for="no_hp">no hp</label>
                    <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp"
                        value="{{ old('no_hp') }}">
                    @error('no_hp')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{-- jenis kelamin --}}
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="L"
                                {{ old('jenis_kelamin')=='L' ? 'checked': '' }}>
                            <label class="form-check-label" for="laki_laki">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P"
                                {{ old('jenis_kelamin')=='P' ? 'checked': '' }}>
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
                        name="tahun_lahir" value="{{ old('tahun_lahir') }}">
                    @error('tahun_lahir')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{-- email --}}
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                        value="{{ old('email') }}">
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{-- pass --}}
                <div class="form-group">
                    <label for="password">kata sandi</label>
                    <input type="text" class="form-control @error('password') is-invalid @enderror" id="password"
                        name="password" value="{{ old('password') }}">
                    @error('password')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{-- alamat --}}
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" rows="3" name="alamat"
                        value={{ old('alamat') }}></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-5 mt-2">Daftar</button>
                <div class="text-center fs-6">
                    <p>Already have an account?</p><a href="{{ url('/') }}">Login</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
