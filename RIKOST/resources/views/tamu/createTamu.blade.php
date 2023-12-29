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
        <h2 class="mb-0">Tambah Tamu Baru</h2>
    </div>
    <div class="card-body col-lg-4 ">
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('tamu.store') }}" method="POST" enctype="multipart/form-data">
            @csrf


            @csrf

            <div class="form-group">
                <label for="idtamu">Nomor Tamu</label>
                <input type="text" class="form-control mb-3" name="idtamu" required placeholder="Masukkan Nama Tamu">
            </div>

            <div class="form-group">
                <label for="namatamu">Nama:</label>
                <input type="text" class="form-control mb-3" name="namatamu" required placeholder="Masukkan Nama Tamu">
            </div>

            <div class="form-group">
                <label for="nohptamu">Nomor HP:</label>
                <input type="text" class="form-control mb-3" name="nohptamu" required placeholder="Masukkan Nomor HP">
            </div>

            <div class="form-group">
                <label for="kartu">Kartu Identitas</label>
                <input type="text" class="form-control mb-3" name="kartu" required placeholder="Kartu Identitas">
            </div>

            <div class="form-group">
                <label for="waktu_checkin">Waktu Check-in:</label>
                <input type="date" class="form-control mb-3" name="masuk" required>
            </div>

            <div class="form-group">
                <label for="waktu_checkout">Waktu Check-out:</label>
                <input type="date" class="form-control mb-3" name="keluar" required>
            </div>

            <div>
                @if (count($kamar) > 0)
                <select class="form-select mb-3" aria-label="Masukkan Data Kamar" name="kamar">
                    <option selected>Nomor Kamar</option>

                    @foreach ($kamar as $item)
                    <option value="{{ $item->id_kamar }}">{{ $item->id_kamar }}</option>
                    @endforeach
                </select>
                @else
                <input type="text" id="disabledTextInput" class="form-control mb-3" placeholder="Belum ada data penyewa"
                    disabled>
                @endif

                <div>
                    @if (count($penyewa) > 0)
                    <select class="form-select mb-3" aria-label="Masukkan data penyewa" name="penyewa">
                        <option selected>Nama Penyewa</option>

                        @foreach ($penyewa as $item)
                        <option value="{{ $item->id_penyewa }}">{{ $item->nama_penyewa }}</option>
                        @endforeach
                    </select>
                    @else
                    <input type="text" id="disabledTextInput" class="form-control mb-3"
                        placeholder="Belum ada data penyewa" disabled>
                    @endif

                </div>
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </form>
    </div>
</div>
</body>

</html>

@endsection