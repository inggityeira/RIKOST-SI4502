@extends('layouts.main')

@section('title', 'input pegawai')
<!-- di titik-titik masukin title contoh: RIKOST | Gedung-->

@section('css')
<!-- masukin link file css disini contoh: <link rel="stylesheet" href="css/home.css"> -->

@section('content')
<br>
<div class="container">
    <div class="card">
        <div class="card-body">            
            <h1 class="d-flex justify-content-center">Input Pegawai</h1>
            <form action="{{route('input-data-pegawai')}}" method="post" >
              @csrf
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Pegawai</label>
                <input type="text" class="form-control" id="nama" aria-describedby="nama" name="nama_pegawai">
              </div>
              <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan Pegawai</label>
                <input type="text" class="form-control" id="jabatan" aria-describedby="jabatan" name="jabatan_pegawai">
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
                <label for="noRek" class="form-label">Nomor Rekening Pegawai</label>
                <input type="text" class="form-control" id="noRek" aria-describedby="noRek" name="norek_pegawai">
              </div>
              <div class="mb-3">
                <label for="status" class="form-label">Status Pegawai</label>
                <input type="text" class="form-control" id="status" aria-describedby="status" name="status_pegawai">
              </div>
             
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection