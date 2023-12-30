@extends('layouts.main')

@section('title', 'RIKOST | KAMAR')
<!-- di titik-titik masukin title contoh: RIKOST | Gedung-->

@section('content')
<!-- masukin isi content disini -->

<!DOCTYPE html>
<html lang="en">

<!-- offcanvas -->
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <h1 class="container m-5">Daftar Kamar</h1>
        <a href="{{ route('kamar.create') }}" style="float:right;margin-right:80px">
            <button class="btn btn-primary">Tambah Kamar</button>
        </a>
        <br><br>
        <div class="row container m-5">
        @forelse ($data as $key => $post)
            <div class="col-md-4 mb-3 ml-6">
                <div class="card style-2 mb-md-0 mb-4 ml-6" href="javascript:void(0);">
                    @if(!$post->foto_kamar)
                    <img src="{{ asset('img/kamar.jpg')}}" alt="" class="card-img-top" width="200px" height="200px">
                    @else
                    <img src="{{ asset('storage/uploads/'.$post->foto_kamar)}}" class="card-img-top" alt="Foto Tidak Tersedia" width="200px" height="200px">
                    @endif
                    <div class="card-header">
                        <div class="col-14 mb-3">
                            <b>{{ $post->jenis_kamar}}</b>
                        </div>
                        <div class="row">
                            <div class="col-6 mb-2">
                                <p class="card-text">Lantai ke-{{ $post->lantai_kamar}}</p>
                            </div>
                            <div class="col-6 text-end">
                                <div class="pricing d-flex justify-content-end">
                                    <p class="text-success mb-0 me-2">{{ number_format($post->harga_kamar, 2, '.', ',')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex">
                        <div class="text-center">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('kamar.view', $post->id_kamar) }}" class="btn btn-warning mb-2 me-2 mt-2" aria-label="View">
                                        View
                                </a>
                                <a href="{{ route('kamar.edit', $post->id_kamar) }}" class="btn btn-success mb-2 me-2 mt-2" aria-label="Edit">
                                        Edit
                                </a>
                                <form action="{{ route('kamar.destroy', $post->id_kamar) }}" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <!-- Delete button -->
                                        <button type="submit" class="btn btn-danger mb-2 me-2 mt-2" aria-label="Delete">
                                            Hapus
                                        </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <tr>
                <td colspan="7" style="background-color:lightsalmon">
                    <center>Data belum Tersedia.</center>
                </td>
            </tr>
        @endforelse
        </div>
        <!-- Content Row -->
</main>
<script src="./js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
<script src="./js/jquery-3.5.1.js"></script>
<script src="./js/jquery.dataTables.min.js"></script>
<script src="./js/dataTables.bootstrap5.min.js"></script>
<script src="./js/script.js"></script>
</body>

</html>

@endsection