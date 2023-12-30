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
</head>
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-md-6">
              <div class="card mx-auto" style="max-width: 500px;">
                  <div class="card-header bg-success text-white">
                    Detail Pembayaran
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>ID Pembayaran:</strong> {{$details->id_pembayaran}}</li>
                    <li class="list-group-item"><strong>ID Penyewa:</strong> {{$details->id_penyewa}}</li>
                    <li class="list-group-item"><strong>Tanggal:</strong> {{$details->tgl_pembayaran}}</li>
                    <li class="list-group-item"><strong>Termin Pembayaran:</strong> {{$details->termin_pembayaran}}</li>
                    <li class="list-group-item"><strong>Nominal Pembayaran:</strong> {{$details->nominal_pembayaran}}</li>
                    <li class="list-group-item"><strong>Aspek Pembayaran:</strong> {{$details->aspek_pembayaran}}</li>
                    <li class="list-group-item"><strong>Metode Pembayaran:</strong> {{$details->metode_pembayaran}}</li>
                    <li class="list-group-item"><strong>Status:</strong> {{$details->status_pembayaran}}</li>
                  </ul>
              </div>
          </div>
    <div class="container mt-5">
        <div>
            <center>
            <a href="/pembayaran" class="btn btn-primary btn-lg">Back</a>
            </center>
        </div>
        </div>

    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
@endsection
