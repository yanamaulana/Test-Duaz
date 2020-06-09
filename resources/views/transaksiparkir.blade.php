@extends('layout')

@section('content')
<div class="container mt-4">
    <form method="post" action="{{ url('/Viewtransaksi') }}">
        <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
        <div class="form-group">
            <label for="exampleInputtext1">Jenis Kendaraan</label>
            <select type="select" name="jenis_kendaraan" class="form-control" required>
                <option selected disabled>Pilih ....</option>
                <option value="Motor">Motor</option>
                <option value="Mobil">Mobil</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputtext1">No Polisi</label>
            <input type="text" name="no_polisi" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="exampleInputtext1">Tanggal Transaksi</label>
            <input type="date" name="tanggal_transaksi" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="exampleInputtext1">waktu masuk AM/PM</label>
            <input type="time" name="waktu_masuk" id="waktu_masuk" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="exampleInputtext1">waktu keluar AM/PM</label>
            <input type="time" name="waktu_keluar" id="waktu_keluar" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="exampleInputtext1">Biaya --- Click here to generate biaya</label>
            <input type="text" id="biaya" name="biaya" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
