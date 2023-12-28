@extends('layouts.main')

@section('title', 'RIKOST | Create Tamu')
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
    <div class="card-body">
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @csrf

        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" name="nama" required placeholder="Masukkan Nama Tamu">
        </div>

        <div class="form-group">
            <label for="nomor_hp">Nomor HP:</label>
            <input type="text" class="form-control" name="nomor_hp" required placeholder="Masukkan Nomor HP">
        </div>

        <div class="form-group">
            <label for="bangunan">Bangunan:</label>
            <select class="form-control" name="bangunan">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>
        </div>

        <div class="form-group">
            <label for="no_kamar">Nomor Kamar:</label>
            <select class="form-control" name="no_kamar">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
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