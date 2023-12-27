@extends('layouts.main')

@section('content')
<div class="card mb-4 mt-5">
    <div class="card-body">
        <div class="d-flex justify-content-between mb-2 mt-2">
            <h3 class="text-secondary"><strong>Ubah Layout Layanan Kebersihan</strong></h3>

        </div>
        <a href="{{ url('/kebersihan-admin-create') }}" type="button" class="btn btn-primary mb-4">
            Create
        </a>

        <a href="{{ url('/kebersihan') }}" type="button" class="btn btn-warning mb-4">
            Lihat Web
        </a>
        <div class="table-responsive">
            <table id="userTable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Judul</th>
                        <th class="text-center">Foto</th>
                        <th class="text-center">Harga</th>
                        <th class="text-center">Deskripsi</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $key => $data)
                    <tr>
                        <td class="text-center">{{$key+=1}}</td>
                        <td class="text-center">{{$data->judul}}</td>
                        <td class="text-center"><img src="{{asset('storage/uploads/'.$data->foto.'')}}" width="80" height="80" class="img-thumbnail" alt="foto-pelaporan"></td>
                        <td class="text-center">{{$data->harga}}</td>
                        <td class="text">{{$data->deskripsi}}</td>
                        <td class="text">
                            <a href="{{ route('kebersihan-admin.edit', ['id' => $data->id]) }}" class="btn btn-sm btn-primary">
                                Edit
                            </a>
                            </a>
                            <form action="{{ url('/kebersihan-admin/'.$data->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    Delete
                                </button>
                            </form>
                        </td>
                        
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection