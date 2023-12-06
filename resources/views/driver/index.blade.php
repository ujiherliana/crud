@extends('layout.main')

@section('konten')
    <div class="container">
        <div class="card shadow mt-3">
            <div class="text-center">
                <h2>Data Pengemudi / Driver</h2>
                <br>
                <hr>
            </div>
            <div class="container">
                <a href="" class="btn btn-primary mb-2">Add New</a>
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
@endsection
