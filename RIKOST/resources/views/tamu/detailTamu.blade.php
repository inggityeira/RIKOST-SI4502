@extends('layouts.main')

@section('title', 'RIKOST | Edit Tamu')

@push('css')
<!-- Add any additional CSS links if needed -->
@endpush

@section('content')
<div class="card">
    <div class="card-header">
        <h2 class="mb-0">Edit Tamu</h2>
    </div>
    <div class="card-body col-lg-4">
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('updateTamu', $tamu->id_tamu) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="form-group">
                <label for="idtamu">Nomor Tamu</label>
                <input type="text" class="form-control mb-3" name="idtamu" value="{{ $tamu->id_tamu }}" required
                    readonly>
            </div>

            <div class="form-group">
                <label for="namatamu">Nama:</label>
                <input type="text" class="form-control mb-3" name="namatamu" value="{{ $tamu->nama_tamu }}" required
                    placeholder="Masukkan Nama Tamu">
            </div>

            <div class="form-group">
                <label for="nohptamu">Nomor HP:</label>
                <input type="text" class="form-control mb-3" name="nohptamu" value="{{ $tamu->no_hp_tamu }}" required
                    placeholder="Masukkan Nomor HP">
            </div>

            <div class="form-group">
                <label for="kartu">Kartu Identitas</label>
                <input type="text" class="form-control mb-3" name="kartu" value="{{ $tamu->kartu_identitas }}" required
                    placeholder="Kartu Identitas">
            </div>

            <div class="form-group">
                <label for="waktu_checkin">Waktu Check-in:</label>
                <input type="date" class="form-control mb-3" name="masuk" value="{{ $tamu->waktu_checkin }}" required>
            </div>

            <div class="form-group">
                <label for="waktu_checkout">Waktu Check-out:</label>
                <input type="date" class="form-control mb-3" name="keluar" value="{{ $tamu->waktu_checkout }}" required>
            </div>

            <div class="form-group">
                <label for="kamar">Nomor Kamar</label>
                <select class="form-select mb-3" aria-label="Masukkan Data Kamar" name="kamar">
                    <option selected>{{ $tamu->id_kamar }}</option>
                    @foreach ($kamar as $item)
                    <option value="{{ $item->id_kamar }}">{{ $item->id_kamar }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="penyewa">Nama Penyewa</label>
                <select class="form-select mb-3" aria-label="Masukkan data penyewa" name="penyewa">
                    <option selected>{{ $tamu->id_penyewa }}</option>
                    @foreach ($penyewa as $item)
                    <option value="{{ $item->id_penyewa }}">{{ $item->nama_penyewa }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </form>
    </div>
</div>

@endsection