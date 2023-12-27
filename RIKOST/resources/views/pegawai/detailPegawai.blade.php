@extends('layouts.main')

@section('title', '..........')
<!-- di titik-titik masukin title contoh: RIKOST | Gedung-->

@push('css')
    <!-- masukin <link> yang nyambungin ke file css -->
@endpush

@section('content')
<!-- masukin isi content disini -->
<br>
<div class="container">
    <div class="card">
        <div class="card-body">            
            <h1 class="d-flex justify-content-center">Input Pegawai</h1>
            <form>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Pegawai</label>
                <input type="text" class="form-control" id="nama" aria-describedby="nama" disable>
              </div>
              <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan Pegawai</label>
                <input type="text" class="form-control" id="jabatan" aria-describedby="jabatan" disable>
              </div>
              <div class="mb-3">
                <label for="kontak" class="form-label">Kontak Pegawai</label>
                <input type="text" class="form-control" id="kontak" aria-describedby="kontak" disable>
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Pegawai</label>
                <input type="text" class="form-control" id="alamat" aria-describedby="alamat" disable>
              </div>
              <div class="mb-3">
                <label for="noRek" class="form-label">Nomor Rekening Pegawai</label>
                <input type="text" class="form-control" id="noRek" aria-describedby="noRek" disable>
              </div>
              <div class="mb-3">
                <label for="status" class="form-label">Status Pegawai</label>
                <input type="text" class="form-control" id="status" aria-describedby="status" disable>
              </div>
             
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="delete" class="btn btn-primary">Delete</button>
              <a type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection