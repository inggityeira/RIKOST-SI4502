@extends('layouts.main')

@section('title', 'RIKOST | TAMBAH KAMAR')
<!-- di titik-titik masukin title contoh: RIKOST | Gedung-->

@section('content')
<!-- masukin isi content disini -->

<!DOCTYPE html>
<html lang="en">

<main class="mt-5 pt-3">
    <div class="container-fluid">
        <h1 class="container m-5">Tambah Kamar</h1>
        <div class="row container m-5">
        <form action="{{ route('kamar.add') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Lantai Kamar</label>
                            <input type="text" class="form-control @error('lantai_kamar') is-invalid @enderror" id="lantai_kamar" name="lantai_kamar" value="{{ old('lantai_kamar') }}" placeholder="Lantai Kamar">
                            @if ($errors->has('lantai_kamar'))
                            <span class="text-danger">{{ $errors->first('lantai_kamar') }}</span>
                            @endif
                        </div>
                        <br>
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Jenis Kamar</label>
                            <select class="form-control @error('jenis_kamar') is-invalid @enderror" id="jenis_kamar" name="jenis_kamar" value="{{ old('jenis_kamar') }}">
                                <option value="Suite">Suite</option>
                                <option value="Medium">Medium</option>
                                <option value="Reguler">Reguler</option>
                            </select>
                            @if ($errors->has('jenis_kamar'))
                            <span class="text-danger">{{ $errors->first('jenis_kamar') }}</span>
                            @endif
                        </div>
                        <br>
                        <div class="col-12">
                                <label class="font-weight-bold">Foto Kamar</label>
                                <input type="file" class="form-control @error('foto_kamar') is-invalid @enderror" name="foto_kamar">
                                @error('foto_kamar')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                        <br>
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Fasilitas Kamar</label>
                            <textarea class="form-control @error('fasilitas_kamar') is-invalid @enderror" id="fasilitas_kamar" name="fasilitas_kamar" value="" cols="30" rows="10" placeholder="Fasiltas Kamar">{{ old('fasilitas_kamar') }}</textarea>
                            @if ($errors->has('fasilitas_kamar'))
                            <span class="text-danger">{{ $errors->first('fasilitas_kamar') }}</span>
                            @endif
                        </div>
                        <br>
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Harga Kamar</label>
                            <input type="number" class="form-control @error('harga_kamar') is-invalid @enderror" id="harga_kamar" name="harga_kamar" value="{{ old('harga_kamar') }}" placeholder="Harga Kamar">
                            @if ($errors->has('harga_kamar'))
                            <span class="text-danger">{{ $errors->first('harga_kamar') }}</span>
                            @endif
                        </div>
                        <br>
                        <div class="col-12">
                            <br>
                            <input type="submit" class="btn btn-primary" value="Submit">
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
            <script>
                CKEDITOR.replace('content');
            </script>
        </div>
</main>
</body>

</html>

@endsection