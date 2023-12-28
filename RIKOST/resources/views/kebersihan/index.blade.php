@extends('layouts.main')

@section('title', 'Layanan Kebersihan')
<!-- di titik-titik masukin title contoh: RIKOST | Gedung-->

@push('css')
    <!-- masukin <link> yang nyambungin ke file css -->
@endpush

@section('content')

<div class="container">
<div class="row p-5">
    <div class="col">
        <img src="{{ asset('img/kebersihan.png') }}" alt="image" style="width: 20rem">
    </div>
    <div class="col m-5">
        <h3>Bersihkan Kostmu, Nyaman dan Sehat Bersama!</h3>
        <p>Percayakan kepada kami untuk menjaga kebersihan tempat tinggal Anda dengan profesionalisme dan keahlian</p>
        <a href="#" class="btn btn-warning btn-user btn-block">
            Lihat Layanan Kebersihan
          </a>
    </div>
</div>
</div>

<div class="container">
  <h2>Daily Cleaning</h2>

  <div class="row p-5">
      @foreach ($datas as $data)
      <div class="col">
          <div class="card" style="width: 18rem;">
              <img src="{{ asset('storage/uploads/' . $data->foto) }}" class="card-img-top" alt="{{ $data->judul }}">
              <div class="card-body">
                  <h5 class="card-title">{{ $data->judul }}</h5>
                  <p class="card-text">{{ $data->deskripsi }}</p>
                  <h5>Rp. {{ $data->harga }}</h5>
                  <a href="{{ url('kebersihan-pembayaran', $data->id) }}  " class="btn btn-primary">Pesan Sekarang</a>
              </div>
          </div>
      </div>
      @endforeach
  </div>
</div>



@endsection