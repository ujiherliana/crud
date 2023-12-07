@extends('layout.main')

@section('konten')
    <div class="container">
        <div class="card mt-5 shadow">
            <div class="container">
                <h2><strong>Detail data merchent</strong></h2>
                <br>
                <hr>
                <form action="{{ route('merchent.store') }}" method="post">
                    @csrf
                    <div class="mt-2 col-6">
                        <label for="" class="form-label">Nama Merchent: </label>
                        <label for="" class="form-label"> <strong>{{ $merchent->name }}</strong></label>
                    </div>
                    <div class="mt-2 col-6">
                        <label for="" class="form-label">Alamat Lengkap: </label>
                        <label for="" class="form-label"> <strong>{{ $merchent->alamat }}</strong></label>
                    </div>
                    <div class="mt-2 col-6">
                        <label for="" class="form-label">Jenis Toko: </label>
                        <label for="" class="form-label"> <strong>{{ $merchent->jenis_toko }}</strong></label>
                    </div>
                    <div class="mt-2 col-6 mb-3">
                        <a href="{{ route('merchent.index') }}" class="btn btn-warning">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
