@extends('layouts.main')

@section('title', 'RIKOST | Pembayaran')
<!-- di titik-titik masukin title contoh: RIKOST | Gedung-->

@push('css')
<!-- masukin <link> yang nyambungin ke file css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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
  <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahModal">Add New</button>
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
        @foreach($list as $item)
            <tr>
                <td>{{ $item->id_pembayaran }}</td>
                <td>{{ $item->id_penyewa }}</td>
                <td>{{ $item->tgl_pembayaran }}</td>
                <td>{{ $item->termin_pembayaran }}</td>
                <td>{{ $item->nominal_pembayaran }}</td>
                <td>{{ $item->aspek_pembayaran }}</td>
                <td>{{ $item->metode_pembayaran }}</td>
                <td>{{ $item->status_pembayaran }}</td>
                <td><a href="/pembayaran/edit/{{ $item->id_pembayaran }}" class="btn btn-primary">Edit</a>
                <a href="/pembayaran/destroy/{{ $item->id_pembayaran }}" class="btn btn-primary">Delete</a></td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>

<!-- Modal Tambah Pembayaran -->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahModalLabel">Tambah Pembayaran</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/pembayaran/store">
        @csrf
        <div class="modal-body">
            <div class="form-group">
                <label for="exampleFormControlInput1">ID Penyewa</label>
                <input type="unsignedBigInteger" class="form-control" name="id_penyewa">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Tanggal Pembayaran</label>
                <input type="date" class="form-control" name="tgl_pembayaran">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Termin Pembayaran</label>
                <input type="string" class="form-control" name="termin_pembayaran">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nominal Pembayaran</label>
                <input type="decimal" class="form-control" name="nominal_pembayaran">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Aspek Pembayaran</label>
                <input type="string" class="form-control" name="aspek_pembayaran">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Metode Pembayaran</label>
                <input type="string" class="form-control" name="metode_pembayaran">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Status Pembayaran</label>
                <input type="string" class="form-control" name="status_pembayaran">
            </div>
            <div class="dropdown"  style = "background-color: #F5F5DC ; color : white>
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Choose One
            </button>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item active" href="#" aria-current="true">LUNAS</a></li> 
            <li><a class="dropdown-item" href="#">BELUM LUNAS</a></li>
          </ul>
          </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="btnSimpan">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>
@endsection