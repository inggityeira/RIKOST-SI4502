@extends('layouts.main')

@section('content')
<div class="card mb-4 mt-5">
    <div class="card-body">
        <div class="d-flex justify-content-between mb-2 mt-2">
            <h3 class="text-secondary"><strong>Edit Layout Layanan Kebersihan</strong></h3>
        </div>

        <form class="p-3" method="POST" action="{{ route('kebersihan-admin.update', $data->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $data->judul }}">
            </div>

            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto">
            </div>

            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" value="{{ $data->harga }}">
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi">{{ $data->deskripsi }}</textarea>
            </div>

            <div class="form-group mt-4 mb-0">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-save mr-1"></i>
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
