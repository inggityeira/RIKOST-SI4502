@extends('layouts.main')

@section('title', 'RIKOST | Tambah Tamu')
<!-- di titik-titik masukin title contoh: RIKOST | Gedung-->

@push('css')
<!-- masukin <link> yang nyambungin ke file css -->
@endpush

@section('content')
<!-- masukin isi content disini -->
<div class="card">
    <div class="card-header">
        <h2 class="mb-0">Buku Tamu Kostan</h2>
    </div>
    <div class="card-body col-lg-4 ">
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        <form action="{{ route('') }}" method="POST" enctype="multipart/form-data">
            @endif

            @csrf

            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control mb-3" name="nama" required placeholder="Masukkan Nama Tamu">
            </div>

            <div class="form-group">
                <label for="nomor_hp">Nomor HP:</label>
                <input type="text" class="form-control mb-3" name="nomor_hp" required placeholder="Masukkan Nomor HP">
            </div>

            <div class="form-group">
                <label for="kartu_identitas">Kartu Identitas:</label>
                <input type="file" class="form-control mb-3" name="kartu_identitas">
            </div>

            <div class="form-group">
                <label for="waktu_checkin">Waktu Check-in:</label>
                <input type="date" class="form-control mb-3" name="waktu_checkin" required>
            </div>

            <div class="form-group">
                <label for="waktu_checkout">Waktu Check-out:</label>
                <input type="date" class="form-control mb-3" name="waktu_checkout">
            </div>

            <div class="form-group">
                <label for="id_kamar">Kamar:</label>
                <select class="form-control mb-3" name="id_kamar" required>
                    <!-- Option diisi dengan data kamar yang tersedia -->
                </select>
            </div>

            <div class="form-group">
                <label for="id_penyewa">Penyewa:</label>
                <select class="form-control mb-3" name="id_penyewa" required>
                    <!-- Option diisi dengan data penyewa yang tersedia -->
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<!-- Tambahkan JS Bootstrap di sini jika diperlukan -->
</body>

</html>

@endsection