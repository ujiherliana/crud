@extends('layout.main')

@section('konten')
    <div class="container">
        <div class="card shadow mt-3">
            <div class="text-center">
                <h2>Tambah Data Pengemudi / Driver</h2>
                <br>
                <hr>
            </div>
            <div class="container">
                <a href="{{ route('driver.index') }}" class="btn btn-primary mb-2">Back</a>
                <div class="col-6">
                    <form action="{{ route('driver.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Pengemudi</label>
                            <input type="text" class="form-control" id="nama" name="name" placeholder="" required
                                autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="job" class="form-label">Pilih Job</label>
                            <select name="job" id="" class="form-select" name="job" required>
                                <option value="motor">Driver Motor</option>
                                <option value="mobil">Driver Mobil</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
