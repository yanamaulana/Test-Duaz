@extends('layout')

@section('content')
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Jenis Kendaraan</th>
                <th scope="col">No. Polisi</th>
                <th scope="col">Masuk</th>
                <th scope="col">Keluar</th>
                <th scope="col">Biaya</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($parkir as $li)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $li->jenis_kendaraan }}</td>
                <td>{{ $li->no_polisi }}</td>
                <td>{{ $li->waktu_masuk }}</td>
                <td>{{ $li->waktu_keluar }}</td>
                <td>{{ $li->biaya }}</td>
                <td>
                    <a href="#" class="btn-sm btn-primary">View</a>&nbsp;&nbsp;
                    <a href="#" class="btn-sm btn-warning">Edit</a>&nbsp;&nbsp;

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
