@extends('layouts.main')

@section('title', 'RIKOST | PEGAWAI')
<!-- di titik-titik masukin title contoh: RIKOST | Gedung-->

@section('css')
<!-- masukin link file css disini contoh: <link rel="stylesheet" href="css/home.css"> -->

@section('content')
<br>
<div class="container">
    <div class="card">
        <div class="card-body">            
            <h1 class="d-flex justify-content-center">INPUT PEGAWAI RIKOST</h1>
            <form action="{{route('input-data-pegawai')}}" method="get" >
              @csrf
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Pegawai</label>
                <input type="text" class="form-control" id="nama" aria-describedby="nama" name="nama_pegawai">
              </div>
              <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan Pegawai</label>
                <select class="form-select"name= 'jabatan_pegawai' aria-label="Default select example">
                  <option selected>Select Jabatan Pegawai</option>
                  <option value="Laundry">Laundry</option>
                  <option value="Laundry">Penjaga</option>
                  <option value="Cleaning Service">Cleaning Service</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="kontak" class="form-label">Kontak Pegawai</label>
                <input type="text" class="form-control" id="kontak" aria-describedby="kontak" name="kontak_pegawai">
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Pegawai</label>
                <input type="text" class="form-control" id="alamat" aria-describedby="alamat" name="alamat_pegawai">
              </div>
              <div class="mb-3">
                <label for="noRek" class="form-label">Nomor Rekening</label>
                <input type="text" class="form-control" id="noRek" aria-describedby="noRek" name="norek_pegawai">
              </div>
              <div class="mb-3">
                <label for="status" class="form-label">Status Pegawai</label>
                <select class="form-select"name= 'status_pegawai' aria-label="Default select example">
                  <option selected>Select Status Pegawai</option>
                  <option value="Bekerja">Bekerja</option>
                  <option value="Tidak Bekerja">Tidak Bekerja</option>
                </select>
              </div>
             
              <button type="submit" class="btn btn-primary mr-2">Simpan</button>
              <a href="/pegawai" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>

@endsection