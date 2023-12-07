@extends('layout.main')

@section('konten')
    <div class="container">
        <div class="card mt-5 shadow">
            <h2 class="text-center">Data Merchent</h2>
            <br>
            <hr>
            <div class="container">
                <p><small>Data merchent terdiri dari data-data user yang terdaftar sebagai mitra yang menyediakan kebutuhan
                        pokok dan sekunder pelanggan</small></p>
                <a href="{{ route('merchent.create') }}" class="btn btn-primary">Add Merchent</a>
                <div class="mt-2">
                    <table class="table table-striped">
                        <tr>
                            <th>NO</th>
                            <th>Nama Merchent</th>
                            <th>Alamat</th>
                            <th>Jenis Merchent</th>
                            <th></th>
                        </tr>
                        @php
                            $no = 1;
                        @endphp
                        @forelse ($merchent as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->jenis_toko }}</td>
                                <td>
                                    <form action="{{ route('merchent.destroy', $item->id) }}" method="post"
                                        onsubmit="return confirm('Hapus data..?')">
                                        <a href="{{ route('merchent.edit', $item->id) }}" class="btn btn-warning">edit</a>
                                        <a href="{{ route('merchent.show', $item->id) }}" class="btn btn-info">show</a>
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-info">
                                <label for="">Data belum tersedia</label>
                            </div>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
