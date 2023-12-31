@extends('layouts.main')

@section('title', 'RIKOST | Tambah Tamu')
<!-- di titik-titik masukin title contoh: RIKOST | Gedung-->

@push('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

@endpush

@section('content')
<!-- masukin isi content disini -->
<div class="container">
    <div class="card mt-4 mx-auto">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0">Tambah Tamu Baru</h2>
        </div>
        <div class="card-body col-lg-8 mx-auto">
            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('tamu.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="idtamu" class="form-label">Nomor Tamu</label>
                    <input type="text" class="form-control" name="idtamu" required placeholder="Masukkan Nomor Tamu">
                </div>

                <div class="mb-3">
                    <label for="namatamu" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="namatamu" required placeholder="Masukkan Nama Tamu">
                </div>

                <div class="mb-3">
                    <label for="nohptamu" class="form-label">Nomor HP</label>
                    <input type="text" class="form-control" name="nohptamu" required placeholder="Masukkan Nomor HP">
                </div>

                <div class="mb-3">
                    <label for="kartu" class="form-label">Kartu Identitas</label>
                    <input type="text" class="form-control" name="kartu" required placeholder="Kartu Identitas">
                </div>

                <div class="mb-3">
                    <label for="waktu_checkin" class="form-label">Waktu Check-in</label>
                    <input type="date" class="form-control" name="masuk" required>
                </div>

                <div class="mb-3">
                    <label for="waktu_checkout" class="form-label">Waktu Check-out</label>
                    <input type="date" class="form-control" name="keluar" required>
                </div>

                <div class="mb-3">
                    @if (count($kamar) > 0)
                    <label for="kamar" class="form-label" name="kamar"> Nomor Kamar </label>
                    <select class="form-select" aria-label="Masukkan Data Kamar" name="kamar">
                        <option selected>Pilih Kamar</option>
                        @foreach ($kamar as $pilih)
                        <option value="{{ $pilih->id_kamar }}">{{ $pilih->id_kamar }}</option>
                        @endforeach
                    </select>
                    @else
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Belum ada data kamar"
                        disabled>
                    @endif
                </div>

                <div class="mb-4">
                    @if (count($penyewa) > 0)
                    <label for="penyewa" class="form-label" name="penyewa"> Nama Penyewa Penanggung Jawab </label>
                    <select class="form-select" aria-label="Masukkan data penyewa" name="penyewa">
                        <option selected>Pilih Nama Penyewa</option>
                        @foreach ($penyewa as $pilih)
                        <option value="{{ $pilih->id_penyewa }}">{{ $pilih->nama_penyewa }}</option>
                        @endforeach
                    </select>
                    @else
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Belum ada data penyewa"
                        disabled>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>

@endsection