@extends('layouts.main')

@section('title', 'RIKOST | PEMBAYARAN')
<!-- di titik-titik masukin title contoh: RIKOST | Gedung-->

@push('css')
<!-- masukin <link> yang nyambungin ke file css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

@section('content')
<!-- masukin isi content disini -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Pembayaran RIKOST</title>
</head>
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form method="POST" action="{{route('update.pembayaran', $list->id_pembayaran)}}">
                @csrf
                @method('PUT')

              <!-- Tanggal Pembayaran -->
              <div class="mb-4">
                <label for="tgl_pembayaran" class="form-label">Tanggal Pembayaran</label>
                <input type="date" name="tgl_pembayaran" id="tgl_pembayaran" class="form-control" placeholder="Tanggal Pembayaran"  value="{{$list->id_pembayaran}}" />
              </div>

              <!-- Termin Pembayaran -->
              <div class="mb-4">
                <label for="termin_pembayaran" class="form-label">Termin Pembayaran</label>
                <select name="termin_pembayaran" id="termin_pembayaran" class="form-select">
              <option value="Satu">1</option>
              <option value="Dua">2</option>
              <!-- Tambahkan opsi lain sesuai kebutuhan Anda -->
            </select>
          </div>

              <!-- Nominal Pembayaran -->
              <div class="mb-4">
                <label for="nominal_pembayaran" class="form-label">Nominal Pembayaran</label>
                <input type="text" name="nominal_pembayaran" id="nominal_pembayaran" class="form-control" placeholder="Nominal Pembayaran" value="{{$list->nominal_pembayaran}}" />
              </div>

              <!-- Aspek Pembayaran -->
              <div class="mb-4">
                <label for="aspek_pembayaran" class="form-label">Aspek Pembayaran</label>
                <select name="aspek_pembayaran" id="aspek_pembayaran" class="form-select">
              <option value="Kosan Tipe Kamar Suite">Kosan Tipe Kamar Suite</option>
              <option value="Kosan Tipe Kamar Medium">Kosan Tipe Kamar Medium</option>
              <option value="Kosan Tipe Kamar Reguler">Kosan Tipe Kamar Reguler</option>
              <option value="Laundry">Laundry</option>
              <option value="Kebersihan">Kebersihan</option>
              <!-- Tambahkan opsi lain sesuai kebutuhan Anda -->
            </select>
          </div>

              <!-- Metode Pembayaran -->
              <div class="mb-4">
                <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
                <input type="text" name="metode_pembayaran" id="metode_pembayaran" class="form-control" placeholder="Metode Pembayaran" value="{{$list->metode_pembayaran}}" />
              </div>

              <!-- Status Pembayaran -->
              <div class="mb-4">
                <label for="status_pembayaran" class="form-label">Status Pembayaran</label>
                <select name="status_pembayaran" id="status_pembayaran" class="form-select">
              <option value="Belum Lunas">Belum Lunas</option>
              <option value="Lunas">Lunas</option>
              <option value="Dibatalkan">Dibatalkan</option>
              <!-- Tambahkan opsi lain sesuai kebutuhan Anda -->
            </select>
          </div>

              <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4" style = "background-color: green ; color : white">Save</button>
            <button type="submit" class="btn btn-primary btn-block mb-4" style = "background-color: red ; color : white">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>

</body>
</html>
@endsection
