@extends('layouts.main')

@section('title', 'RIKOST | Pembayaran')
<!-- di titik-titik masukin title contoh: RIKOST | Gedung-->

@push('css')
<!-- masukin <link> yang nyambungin ke file css -->

@endpush

@section('content')
<!-- masukin isi content disini -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Edit Pembayaran</title>
</head>
<body>

<div class="container mt-5">
  <h2>Edit Pembayaran</h2>
  @foreach($list as $item)
  <form action="/pembayaran/update/{{ $item->id_pembayaran }}">
        @csrf
        <div class="modal-body">
            <div class="form-group">
                <label for="exampleFormControlInput1">ID Pembayaran</label>
                <input type="number" class="form-control" name="id_pembayaran" value="{{ $item->id_pembayaran }}" disabled>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">ID Penyewa</label>
                <input type="number" class="form-control" name="id_penyewa" value="{{ $item->id_penyewa }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Tanggal Pembayaran</label>
                <input type="date" class="form-control" name="tgl_pembayaran" value="{{ $item->tgl_pembayaran }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Termin Pembayaran</label>
                <input type="text" class="form-control" name="termin_pembayaran" value="{{ $item->termin_pembayaran }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nominal Pembayaran</label>
                <input type="number" class="form-control" name="nominal_pembayaran" value="{{ $item->nominal_pembayaran }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Aspek Pembayaran</label>
                <input type="text" class="form-control" name="aspek_pembayaran" value="{{ $item->aspek_pembayaran }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Metode Pembayaran</label>
                <input type="text" class="form-control" name="metode_pembayaran" value="{{ $item->metode_pembayaran }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Status Pembayaran</label>
                <input type="text" class="form-control" name="status_pembayaran" value="{{ $item->status_pembayaran }}">
            </div>
        </div>
        <div class="modal-footer">
            <a href="/pembayaran" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary" id="btnSimpan">Save</button>
        </div>
      </form>
      @endforeach
</div>

</body>
</html>
@endsection