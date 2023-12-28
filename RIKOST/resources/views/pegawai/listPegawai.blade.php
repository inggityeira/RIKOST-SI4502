@extends('layouts.main')

@section('title', 'DATA STAFF')
<!-- di titik-titik masukin title contoh: RIKOST | Gedung-->
@section('css')
<!-- masukin link file css disini contoh: <link rel="stylesheet" href="css/home.css"> -->
<link rel="stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

@section('content')
<!-- masukin isi content disini -->


<div class="container mt-5">
  <h2>Tabel Pegawai</h2>
  <div class="d-flex justify-content-end">
    <a class="btn btn-primary"href="/input_pegawai">Tambah</a>
  </div>
  <br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID Pegawai</th>
        <th>Nama Pegawai</th>
        <th>Jabatan Pegawai</th>
        <th>Kontak Pegawai</th>
        <th>Alamat Pegawai</th>
        <th>Norek Pegawai</th>
        <th>Status Pegawai</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <thead>
      <tr>
        <td>001</td>
        <td>Udin</td>
        <th>Jabatan Pegawai</th>
        <th>Kontak Pegawai</th>
        <th>Alamat Pegawai</th>
        <th>Norek Pegawai</th>
        <th>Status Pegawai</th>
        <td><a class="btn btn-warning" href="">Edit</a><a class="btn btn-danger" href="">Hapus</a></td>
      </tr>
    </thead>
    <tbody>
      <!-- Data Pegawai ditampilkan di sini -->
    </tbody>
  </table>
</div>

<!-- Modal Tambah Pegawai -->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahModalLabel">Tambah Pegawai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form tambah pegawai ditampilkan di sini -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" id="btnSimpan">Simpan</button>
      </div>
    </div>
  </div>
</div>

@endsection