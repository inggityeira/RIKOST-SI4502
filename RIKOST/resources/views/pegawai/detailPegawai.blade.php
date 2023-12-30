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
            <form action="{{ route('updatePegawai', $pegawai->id_pegawai )}}" method="get">
              @csrf
              <!-- @method('put') -->
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Pegawai</label>
                <input type="text" class="form-control" id="nama" aria-describedby="nama" value="{{$pegawai->nama_pegawai}}" name="nama_pegawai">
              </div>
              <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan Pegawai</label>
                <select class="form-select"name= 'jabatan_pegawai' aria-label="Default select example">
                  <option selected>{{$pegawai->jabatan_pegawai}}</option>
                  <option value="Laundry">Laundry</option>
                  <option value="Laundry">Penjaga</option>
                  <option value="Cleaning Service">Cleaning Service</option>
                </select>
              <div class="mb-3">
                <label for="kontak" class="form-label">Kontak Pegawai</label>
                <input type="text" class="form-control" id="kontak" aria-describedby="kontak" value="{{$pegawai->kontak_pegawai}}" name="kontak_pegawai">
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Pegawai</label>
                <input type="text" class="form-control" id="alamat" aria-describedby="alamat" value="{{$pegawai->alamat_pegawai}}" name="alamat_pegawai">
              </div>
              <div class="mb-3">
                <label for="noRek" class="form-label">Nomor Rekening Pegawai</label>
                <input type="text" class="form-control" id="noRek" aria-describedby="noRek" value="{{$pegawai->norek_pegawai}}" name="norek_pegawai">
              </div>
              <div class="mb-3">
                <label for="status" class="form-label">Status Pegawai</label>
                <select class="form-select"name= 'status_pegawai' aria-label="Default select example" >
                  <option selected>Select Status Pegawai</option>
                  <option value="Bekerja">Bekerja</option>
                  <option value="Tidak Bekerja">Tidak Bekerja</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              
            </form>
        </div>
    </div>
</div>

@endsection