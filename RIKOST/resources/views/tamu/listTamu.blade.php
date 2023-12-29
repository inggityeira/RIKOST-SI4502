@extends('layouts.main')

@section('title', 'RIKOST | Daftar Tamu')

@push('css')
<!-- Add any additional CSS links if needed -->
@endpush

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h2 class="mb-0">Buku Tamu Kostan</h2>
        <a href="{{ route('createTamu') }}" class="btn btn-primary">+ Tamu Baru</a>
    </div>
</div>

<div class="table-responsive p-4 borderline">
    <table class="table table-striped table-sm font">
        <thead>
            <tr>
                <th scope="col">No Tamu</th>
                <th scope="col">Nama Tamu</th>
                <th scope="col">No.HP</th>
                <th scope="col">Masuk</th>
                <th scope="col">Keluar</th>
                <th scope="col">Kamar</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tamu as $item)
            <tr>
                <td>{{ $item->id_tamu }}</td>
                <td>{{ $item->nama_tamu }}</td>
                <td>{{ $item->no_hp_tamu }}</td>
                <td>{{ $item->waktu_checkin }}</td>
                <td>{{ $item->waktu_checkout }}</td>
                <td>{{ $item->id_kamar }}</td>
                <td>
                    <a href="{{ route('detailTamu', $item->id_tamu) }}" class="badge bg-warning"><span
                            data-feather="edit"></span></a>

                    <form action="{{ route('tamu.destroy', $item->id_tamu) }}" method="post" style="display: inline;">
                        @csrf
                        @method('delete')
                        <button type="submit" class="badge bg-danger" style="border: none"
                            onclick="return confirm('Apakah kamu yakin untuk menghapus tamu ini dari daftar?')">
                            <span data-feather="x-circle"></span>
                        </button>
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace();
</script>
@endsection