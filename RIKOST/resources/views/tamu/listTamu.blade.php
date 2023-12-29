@extends('layouts.main')

@section('title', 'RIKOST | Daftar Tamu')
<!-- di titik-titik masukin title contoh: RIKOST | Gedung-->

@push('css')
<!-- masukin <link> yang nyambungin ke file css -->
@endpush

@section('content')
<!-- masukin isi content disini -->
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h2 class="mb-0">Buku Tamu Kostan</h2>
        <a href="{{ route('inputTamu') }}" class="btn btn-primary">+ Tamu Baru</a>
    </div>
</div>

<div class="table-responsive p-3">
    <table class="table table-striped table-sm font">
        <thead>
            <tr>
                <th scope="col">No Tamu</th>
                <th scope="col">Nama Tamu</th>
                <th scope="col">No.HP</th>
                <th scope="col">Kartu Identitas</th>
                <th scope="col">Kamar</th>
                <th scope="col">Check-in</th>
                <th scope="col">Check-out</th>
                <th scope="col">Kamar</th>
                <th scope="col">Penyewa</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1,001</td>
                <td>random</td>
                <td>data</td>
                <td>
                    <a href="" class="badge bg-info"> <span data-feather="eye"></span></a>
                </td>
                <td>kamar</td>
                <td>cekin</td>
                <td>cekot</td>
                <td>kamar</td>
                <td>penyewa</td>
                <td>
                    <a href="{{ route('liatTamu') }}" class="badge bg-warning"><span data-feather="edit"></ span></a>
                    <a href="" class="badge bg-danger"><span data-feather="x-circle"></ span></a>
                </td>
            </tr>

        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace();
</script>

@endsection