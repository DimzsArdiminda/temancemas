<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.css') }}">
    <title>Pendaftaran Mahasiswa - @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">CRUD-NEW</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link @yield('ins')" aria-current="page" href="{{ route('CRUD-NEW.create') }}">Insert</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @yield('Daf')" href="{{ route('CRUD-NEW.index') }}">Daftar Akun</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    {{-- end of navbar --}}

    {{-- konten --}}
    @yield('konten')
    {{-- end of konten --}}

    {{-- footer --}}
    <footer class="bg-light text-center text-lg-start footer fixed-bottom">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
           Modal Bismillah | &copy; {{ date("Y") }}
        </div>
    {{-- end of footer --}}

</body>

</html>
