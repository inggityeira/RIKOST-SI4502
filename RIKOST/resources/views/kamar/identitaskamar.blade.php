@extends('layouts.main')

@section('title', 'RIKOST | IDENTITAS KAMAR')
<!-- di titik-titik masukin title contoh: RIKOST | Gedung-->

@push('css')
    <!-- masukin <link> yang nyambungin ke file css -->
@endpush

@section('content')
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Suite Class</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Connection
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Data Diri</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            
            <div class="col-md-8">

                <h1>{{ $data->jenis_kamar }}</h1>
                <p>Alamat: Jalan Gatot Subroto no.24</p>
                <p>Email: RIKOST@gmail.com</p>
                <p>Telepon: +6281234567</p>
                <p>Status: <a href="#" class="btn btn-primary mr-2">{{ $data->status_kamar }}</a></p>

                <div class="mt-3">
                    <a href="#" class="btn btn-primary mr-2">Facebook</a>
                    <a href="#" class="btn btn-info mr-2">Twitter</a>
                    <a href="#" class="btn btn-danger">Instagram</a>
                </div>
                <button type="button" class="btn btn-outline-primary mt-5">Link</button>
        <button type="button" class="btn btn-outline-info mt-5">Contact</button>
            </div><div class="col-md-4">

                <a href="https://yt3.googleusercontent.com/1NIzmAWHaYMjO_MgOT7DrhvjiEneGmcgb4QXVZbh53dxJ2A8OmBaTbgSzRBrtHLucjLF8KSZRCI=s900-c-k-c0x00ffffff-no-rj" target="_blank">
                  @if(!$data->foto_kamar)
                    <img src="{{ asset('img/kamar.jpg')}}" alt="" class="img-fluid rounded-circle">
                    @else
                    <img src="{{ asset('storage/uploads/'.$data->foto_kamar)}}" class="img-fluid rounded-circle" alt="Foto Tidak Tersedia">
                    @endif  
                </a>
            </div>
            
        </div>
        <div></div>
        
    </div>
    
    <div class="jumbotron mt-5">
        <h3>
            RIKOST |
            <small class="text-muted">Bandung, Indonesia</small>
          </h3>
        <p class="lead">
            Kamar dengan fasilitas lengkap dan siap huni untuk anak kost
          </p>
    </div>
    <div class="container-fluid">
        <h1 class="display-6">Fasilitas Utama</h1>
        <hr style="border-width: 5px;">
        <figure>
            <blockquote class="blockquote">
              <p>Full Furnished</p>
            </blockquote>
            <ul class="list-unstyled">
                <li>Fasilitas yang tercantum dapat digunakan oleh penghuni kost</li>
                <li>
                  {{ $data->fasililtas_kamar }}
                </li>
              </ul>
          </figure>
        <hr style="border-width: 5px;">
        <h1 class="display-6">Harga</h1>
        <figure>
            <blockquote class="blockquote">
              <p>{{ number_format($data->harga_kamar, 2, '.', ',')}}</p>
            </blockquote>
          </figure>
    </div>
    <div>
    </div>
    
    
</body>
</html>



@endsection