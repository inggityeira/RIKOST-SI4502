@extends('layouts.main')

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
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/gambar1.jpeg') }}" class="card-img-top" alt="gambar1">
                <div class="card-body">
                  <h5 class="card-title">Daily Cleaning 1 Jam</h5>
                  <p class="card-text">Jika Anda memilih layanan "Dengan Alat", maka mitra kami akan membawa:

                    <li>Sapu</li> 
                    <li>Pel</li> 
                    <li>Kemoceng</li>  
                    <li>Chemical lantai</li> 
                    <li>Vacuum</li> 
                     <br>
                    Jika Anda memilih layanan "Tanpa Alat", maka mitra kami tidak akan membawa perlengkapan dan akan menggunakan peralatan dari Anda</p>
                    <h5>Rp. 80.000</h5>
                  <a href="/kebersihan-pembayaran" class="btn btn-primary">Pesan Sekarang</a>
                </div>
              </div>
        </div>

        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/gambar1.jpeg') }}" class="card-img-top" alt="gambar1">
                <div class="card-body">
                  <h5 class="card-title">Daily Cleaning 1,5 Jam</h5>
                  <p class="card-text">Jika Anda memilih layanan "Dengan Alat", maka mitra kami akan membawa:

                    <li>Sapu</li> 
                    <li>Pel</li> 
                    <li>Kemoceng</li>  
                    <li>Chemical lantai</li> 
                    <li>Vacuum</li> 
                     <br>
                    Jika Anda memilih layanan "Tanpa Alat", maka mitra kami tidak akan membawa perlengkapan dan akan menggunakan peralatan dari Anda</p>
                    <h5>Rp. 110.000</h5>
                  <a href="/kebersihan-pembayaran" class="btn btn-primary">Pesan Sekarang</a>
                </div>
              </div>
        </div>

        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/gambar1.jpeg') }}" class="card-img-top" alt="gambar1">
                <div class="card-body">
                  <h5 class="card-title">Daily Cleaning 2 Jam</h5>
                  <p class="card-text">Jika Anda memilih layanan "Dengan Alat", maka mitra kami akan membawa:

                    <li>Sapu</li> 
                    <li>Pel</li> 
                    <li>Kemoceng</li>  
                    <li>Chemical lantai</li> 
                    <li>Vacuum</li> 
                     <br>
                    Jika Anda memilih layanan "Tanpa Alat", maka mitra kami tidak akan membawa perlengkapan dan akan menggunakan peralatan dari Anda</p>
                    <h5>Rp. 140.000</h5>
                  <a href="/kebersihan-pembayaran" class="btn btn-primary">Pesan Sekarang</a>
                </div>
              </div>
        </div>
    </div>


</div>



@endsection