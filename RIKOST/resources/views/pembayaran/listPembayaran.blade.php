@extends('layouts.main')

@section('title', 'RIKOST | Pembayaran')
<!-- di titik-titik masukin title contoh: RIKOST | Gedung-->

@push('css')
<!-- masukin <link> yang nyambungin ke file css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

@endpush

@section('content')
<!-- masukin isi content disini -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Tabel Pembayaran</title>
</head>
<body>

<div class="container mt-5">
  <h2>Tabel Pembayaran</h2>
  <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahModal">Tambah</button>
  <table class="table">
    <thead>
      <tr>
        <th>ID Pembayaran</th>
        <th>ID Penyewa</th>
        <th>Tanggal Pembayaran</th>
        <th>Termin Pembayaran</th>
        <th>Nominal Pembayaran</th>
        <th>Aspek Pembayaran</th>
        <th>Metode Pembayaran</th>
        <th>Status Pembayaran</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
@endsection