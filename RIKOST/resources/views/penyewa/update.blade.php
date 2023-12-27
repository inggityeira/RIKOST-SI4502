@extends('layouts.main')

@section('title', 'RIKOST | Update Penyewa')
<!-- di titik-titik masukin title contoh: RIKOST | Gedung-->

@push('css')
    <!-- masukin <link> yang nyambungin ke file css -->
@endpush

@section('content')
<!-- masukin isi content disini -->
<div class="card">
        <div class="card-body">
            <h2>Update Data Penyewa</h2>

                <div class="form-group">
                    <label for="nama_penyewa">Nama Penyewa</label>
                    <input type="text" name="nama_penyewa" id="nama_penyewa" class="form-control" value="{{ $penyewa->nama_penyewa }}">
                </div>

                <div class="form-group">
                    <label for="kontak_penyewa">Kontak Penyewa</label>
                    <input type="text" name="kontak_penyewa" id="kontak_penyewa" class="form-control" value="{{ $penyewa->kontak_penyewa }}">
                </div>

                <div class="form-group">
                    <label for="NIK_penyewa">NIK Penyewa</label>
                    <input type="text" name="NIK_penyewa" id="NIK_penyewa" class="form-control" value="{{ $penyewa->NIK_penyewa }}">
                </div>

                <div class="form-group">
                    <label for="nama_ortu">Nama Orang Tua</label>
                    <input type="text" name="nama_ortu" id="nama_ortu" class="form-control" value="{{ $penyewa->nama_ortu }}">
                </div>

                <div class="form-group">
                    <label for="kontak_ortu">Kontak Orang Tua</label>
                    <input type="text" name="kontak_ortu" id="kontak_ortu" class="form-control" value="{{ $penyewa->kontak_ortu }}">
                </div>

                <div class="form-group">
                    <label for="waktu_sewa">Waktu Sewa</label>
                    <input type="text" name="waktu_sewa" id="waktu_sewa" class="form-control" value="{{ $penyewa->waktu_sewa }}">
                </div>

                <div class="form-group">
                    <label for="id_kamar">ID Kamar</label>
                    <input type="text" name="id_kamar" id="id_kamar" class="form-control" value="{{ $penyewa->id_kamar }}">
                </div>

                <div class="form-group">
                    <label for="fasilitas_umum">Fasilitas Umum</label>
                    <input type="text" name="fasilitas_umum" id="fasilitas_umum" class="form-control" value="{{ $penyewa->fasilitas_umum }}">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection