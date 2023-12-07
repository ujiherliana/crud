@extends('layout.main')

@section('konten')
    <div class="container">
        <div class="card mt-5 shadow">
            <div class="container">
                <h2><strong>Form data merchent</strong></h2>
                <br>
                <hr>
                <form action="{{ route('merchent.store') }}" method="post">
                    @csrf
                    <div class="mt-2 col-6">
                        <label for="" class="form-label">Nama Merchent</label>
                        <input type="text" class="form-control" autofocus required name="name">
                    </div>
                    <div class="mt-2 col-6">
                        <label for="" class="form-label">Alamat</label>
                        <textarea name="alamat" id="" cols="10" rows="3" required class="form-control"></textarea>
                    </div>
                    <div class="mt-2 col-6">
                        <label for="" class="form-label">Jenis Mechent</label>
                        <select name="jenis_toko" id="" class="form-select">
                            <option value="" selected>Pilih jenis toko</option>
                            <option value="toko kecil">Toko Kecil</option>
                            <option value="toko sedang">Toko Sedang</option>
                            <option value="toko besar">Toko Besar</option>
                        </select>
                    </div>
                    <div class="mt-2 col-6 mb-3">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                        <a href="{{ route('merchent.index') }}" class="btn btn-warning">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
