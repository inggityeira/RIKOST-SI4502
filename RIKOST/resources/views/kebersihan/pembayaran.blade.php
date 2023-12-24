@extends('layouts.main')

@section('content')

<div class="container">

    <div class="row p-5">
        <div class="col">
            <img src="{{ asset('img/kebersihan.png') }}" alt="image" style="width: 20rem">
        </div>

        <div class="col">
            <div class="card">
                <div class="card-header">
                  <h5 class="card-title">RINGKASAN PRODUK</h5>
                </div>
                <div class="card-body">
                    <p>Daily Cleaning 1 Jam <br>
                        Rp 12.500</p>
                        <hr>
                  <form>
                    <div class="form-group">
                        <label for="catatan">Catatan</label>
                        <input type="text" class="form-control" id="catatan" placeholder="Masukkan catatan">
                      </div>
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" id="nama" placeholder="Masukkan nama">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Masukkan email">
                      </div>
                      <div class="form-group">
                        <label for="notlp">Nomor Telpon</label>
                        <input type="text" class="form-control" id="notllp" placeholder="Masukkan nomor telpon">
                      </div>

                      <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <textarea type="text" class="form-control" id="notllp" placeholder="Masukkan nomor telpon"> </textarea>
                      </div>
                      <br>
                      <a href="#" class="btn btn-primary">Lanjut Bayar</a>
                  </form>
                </div>
              </div>
            </div>
        </div>

        
    </div>
</div>

@endsection
