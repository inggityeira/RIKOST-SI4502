@extends('layouts.main')

@section('title', 'RIKOST | PEMBAYARAN')
<!-- di titik-titik masukin title contoh: RIKOST | Gedung-->

@push('css')
<!-- masukin <link> yang nyambungin ke file css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<style>
    td, tr {
        text-align: center
    }
</style>

@section('content')
<!-- masukin isi content disini -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-9">
            <h2>Pembayaran RIKOST</h2>
            <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahModal">Add New</button>

        </div>
        <div class="col-md-2">
            <img src="img/payment.png" width="170px" alt="payment">
        </div>
    </div>
  <table class="table">
    <thead>
      <tr>
        <th>ID Pembayaran</th>
        <th>Nama Penyewa</th>
        <th>Tanggal Pembayaran</th>
        <th>Aspek Pembayaran</th>
        <th>Status Pembayaran</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($list as $item)
            <tr>
                <td>{{ $item->id_pembayaran }}</td>
                <td>{{ $item->penyewa->nama_penyewa}}</td>
                <td>{{ $item->tgl_pembayaran }}</td>
                <td>{{ $item->aspek_pembayaran }}</td>
                <td>{{ $item->status_pembayaran }}</td>
                <td>
                  <a href="/pembayaran/detail/{{ $item->id_pembayaran }}">
                    <svg viewBox="0 0 512 512" version="1.1" width="28" heigth="28" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>details</title> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Combined-Shape" fill="#1fbd0a" transform="translate(64.000000, 64.000000)"> <path d="M384,64 L384,384 L64,384 L64,64 L384,64 Z M341.333333,106.666667 L106.666667,106.666667 L106.666667,341.333333 L341.333333,341.333333 L341.333333,106.666667 Z M320,1.42108547e-14 L320,42.6666667 L42.666,42.666 L42.6666667,320 L1.42108547e-14,320 L1.42108547e-14,1.42108547e-14 L320,1.42108547e-14 Z M298.666667,234.666667 L298.666667,277.333333 L149.333333,277.333333 L149.333333,234.666667 L298.666667,234.666667 Z M298.666667,149.333333 L298.666667,192 L149.333333,192 L149.333333,149.333333 L298.666667,149.333333 Z"> </path> </g> </g> </g></svg>
                  </a>
                  |
                  <a href="/pembayaran/edit/{{ $item->id_pembayaran }}" class="">
                    <svg viewBox="0 0 24 24" fill="none" width="28" heigth="28" xmlns="http://www.w3.org/2000/svg" stroke="#"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.15" d="M8 16H12L18 10L14 6L8 12V16Z" fill="#0084ff"></path> <path d="M14 6L8 12V16H12L18 10M14 6L17 3L21 7L18 10M14 6L18 10M10 4L4 4L4 20L20 20V14" stroke="#0084ff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                  </a>
                  |
                  <a href="/pembayaran/destroy/{{ $item->id_pembayaran }}" class="">
                    <svg viewBox="0 0 24 24" fill="none" width="28" heigth="28"  xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 7H20" stroke="#ff0000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M6 10L7.70141 19.3578C7.87432 20.3088 8.70258 21 9.66915 21H14.3308C15.2974 21 16.1257 20.3087 16.2986 19.3578L18 10" stroke="#ff0000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#ff0000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                  </a>
                </td>
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
      <form method="POST" action="{{ route('store.pembayaran') }}">
        @csrf
        @method('POST')
        <div class="modal-body">
          <!-- ID Penyewa -->
          <div class="mb-3">
            <label for="id_penyewa" class="form-label">ID Penyewa</label>
            <input type="text" name="id_penyewa" id="id_penyewa" class="form-control" placeholder="ID Penyewa" required />
          </div>

          <!-- Tanggal Pembayaran -->
          <div class="mb-3">
            <label for="tgl_pembayaran" class="form-label">Tanggal Pembayaran</label>
            <input type="date" name="tgl_pembayaran" id="tgl_pembayaran" class="form-control" required />
          </div>

          <!-- Termin Pembayaran -->
          <div class="mb-3">
            <label for="termin_pembayaran" class="form-label">Termin Pembayaran</label>
            <select name="termin_pembayaran" id="termin_pembayaran" class="form-select">
              <option value="Select the preferred payment terms">Select the preferred payment terms</option>
              <option value="Satu">1</option>
              <option value="Dua">2</option>
              <!-- Tambahkan opsi lain sesuai kebutuhan Anda -->
            </select>
          </div>

          <!-- Nominal Pembayaran -->
          <div class="mb-3">
            <label for="nominal_pembayaran" class="form-label">Nominal Pembayaran</label>
            <input type="text" name="nominal_pembayaran" id="nominal_pembayaran" class="form-control" placeholder="Nominal Pembayaran" />
          </div>

          <!-- Aspek Pembayaran -->
          <div class="mb-3">
            <label for="aspek_pembayaran" class="form-label">Aspek Pembayaran</label>
            <select name="aspek_pembayaran" id="aspek_pembayaran" class="form-select">
              <option value="Choose the payment aspect you will pay">Choose the payment aspect you will pay</option>
              <option value="Kosan Tipe Kamar Suite">Kosan Tipe Kamar Suite</option>
              <option value="Kosan Tipe Kamar Medium">Kosan Tipe Kamar Medium</option>
              <option value="Kosan Tipe Kamar Reguler">Kosan Tipe Kamar Reguler</option>
              <option value="Laundry">Laundry</option>
              <option value="Kebersihan">Kebersihan</option>
              <!-- Tambahkan opsi lain sesuai kebutuhan Anda -->
            </select>
          </div>

          <!-- Metode Pembayaran -->
          <div class="mb-3">
            <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
            <input type="text" name="metode_pembayaran" id="metode_pembayaran" class="form-control" placeholder="Metode Pembayaran" />
          </div>

          <!-- Status Pembayaran -->
          <div class="mb-3">
            <label for="status_pembayaran" class="form-label">Status Pembayaran</label>
            <select name="status_pembayaran" id="status_pembayaran" class="form-select">
              <option value="Select the status">Select the status</option>
              <option value="Belum Lunas">Belum Lunas</option>
              <option value="Lunas">Lunas</option>
              <option value="Dibatalkan">Dibatalkan</option>
              <!-- Tambahkan opsi lain sesuai kebutuhan Anda -->
            </select>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style = "background-color: red ; color : white">Close</button>
          <button type="submit" class="btn btn-success" >Save</button>
        </div>
      </form>
    </div>
  </div>
</div>


</body>
</html>
@endsection
