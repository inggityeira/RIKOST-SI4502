@extends('layouts.main')

@section('title', 'RIKOST | IDENTITAS KAMAR')
<!-- di titik-titik masukin title contoh: RIKOST | Gedung-->

@push('css')
    <!-- masukin <link> yang nyambungin ke file css -->
@endpush

@section('content')
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