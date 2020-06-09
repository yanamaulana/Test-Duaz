@extends('layout')

@section('content')
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Konsumen</th>
                <th scope="col">Jenis Kendaraan</th>
                <th scope="col">No. Polisi</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Kelamin</th>
                <th scope="col">No. Hp</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataKonsumens as $konsumen)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $konsumen->konsumen }}</td>
                <td>{{ $konsumen->jenis_kendaraan }}</td>
                <td>{{ $konsumen->no_polisi }}</td>
                <td>{{ date("d M Y", strtotime($konsumen->tanggal_lahir) ) }}</td>
                <td>{{ $konsumen->jenis_kelamin }}</td>
                <td>{{ $konsumen->no_hp }}</td>
                <td>
                    <a href="{{ url('/konsumenDetail', $konsumen->id) }}"
                        class="btn-sm btn-primary">View</a>&nbsp;&nbsp;
                    <a href="{{ url('/konsumenEdit', $konsumen->id) }}" class="btn-sm btn-warning">Edit</a>&nbsp;&nbsp;
                    <a href="{{ url('/konsumenDelete', $konsumen->id) }}" class="btn-sm btn-danger">Delete</a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
