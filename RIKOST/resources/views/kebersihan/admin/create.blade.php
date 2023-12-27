@extends('layouts.main')

@section('content')

<div class="row mt-2 p-5">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3 class="m-0">Tambah Layout Kebersihan</h3>
            </div>
            <div class="card-body">
                <form class="p-3" method="POST" action="{{ url('/kebersihan-admin-store') }}" enctype="multipart/form-data">
                    @csrf
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul">
                </div>

                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto">
                </div>

                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga">
                </div>

                <div class="form-group">
                    <label for="deskripsi">deskripsi</label>
                    <textarea type="text" class="form-control" id="deskripsi" name="deskripsi"></textarea>
                </div>
                <div class="form-group mt-4 mb-0">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-paper-plane mr-1"></i>
                        Submit
                    </button>
                </div>
            </form>
            </div>
        </div>
    </div>


@endsection