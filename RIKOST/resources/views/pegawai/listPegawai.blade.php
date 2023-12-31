@extends('layouts.main')

@section('title', 'RIKOST | PEGAWAI')
<!-- di titik-titik masukin title contoh: RIKOST | Gedung-->
@section('css')
<!-- masukin link file css disini contoh: <link rel="stylesheet" href="css/home.css"> -->
<link rel="stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

@section('content')
<!-- masukin isi content disini -->


<div class="container mt-5">
  <h2> PEGAWAI RIKOST</h2>
  <div class="d-flex justify-content-end">
    <a class="btn btn-primary"href="/input_pegawai">+Tambah</a>
  </div>
  <br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>id Pegawai</th>
        <th>Nama Pegawai</th>
        <th>Jabatan Pegawai</th>
        <th>Kontak Pegawai</th>
        <th>Alamat Pegawai</th>
        <th>Nomor Rekening</th>
        <th>Status Pegawai</th>
        <th>Aksi</th>
      </tr>
    </thead>
   
    <tbody>
      <!-- Data Pegawai ditampilkan di sini -->
      @foreach ($pegawai as $p)
      <tr>
      <td>{{ $p->id_pegawai}}</td>
        <td>{{ $p->nama_pegawai}}</td>
        <td>{{ $p->jabatan_pegawai}}</td>
        <td>{{ $p->kontak_pegawai}}</td>
        <td>{{ $p->alamat_pegawai}}</td>
        <td>{{ $p->norek_pegawai}}</td>
        <td>{{ $p->status_pegawai}}</td>
        <td>
          <a class="btn btn-warning" href="{{ route('editPegawai', $p->id_pegawai)}}">Edit</a>
          <a class="btn btn-danger" href="{{route('delete-pegawai',$p->id_pegawai)}}">Hapus</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection