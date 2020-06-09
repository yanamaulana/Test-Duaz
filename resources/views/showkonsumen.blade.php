@extends('layout')

@section('content')
<div class="container mt-5">
    <table class="table table-striped">
        <tbody>
            <tr>
                <td>
                    <h2>{{$datakonsumen->konsumen }}</h2>
                </td>
                <td>
                    <h2>{{$datakonsumen->jenis_kendaraan }}</h2>
                </td>
                <td>
                    <h2>{{$datakonsumen->no_polisi }}</h2>
                </td>
                <td>
                    <h2>{{ date("d M Y", strtotime($datakonsumen->tanggal_lahir) ) }}</h2>
                </td>
                <td>
                    <h2>{{$datakonsumen->jenis_kelamin }}</h2>
                </td>
                <td>
                    <h2>{{$datakonsumen->no_hp }}</h2>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
