@extends('layout.main')
<div class="container">
    <div class="card shadow mt-3">
        <div class="text-center">
            <h2>Data Pengemudi / Driver</h2>
            <br>
            <hr>
        </div>
        <div class="container">
            <a href="{{ route('driver.create') }}" class="btn btn-primary mb-2">Add New</a>
            <div>
                <table class="table table-stiped">
                    @php
                        $no = 1;
                    @endphp
                    <tr>
                        <th>No</th>
                        <th>Nama Pengemudi</th>
                        <th>Job</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($data as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->job }}</td>
                            <td>
                                <form action="{{ route('driver.destroy', $item->id) }}" method="post"
                                    onsubmit="return confirm('hapus data..?')">
                                    <a href="{{ route('driver.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('driver.show', $item->id) }}" class="btn btn-info">Show</a>
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <label for="" class="alert alert-info"><strong>Woops..!!</strong> Belum ada data dalam
                            database</label>
                    @endforelse
                </table>

            </div>
        </div>
    </div>
</div>
@section('konten')
@endsection
