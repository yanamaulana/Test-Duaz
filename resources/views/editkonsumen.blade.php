@extends('layout')

@section('content')
<div class="container mt-4">
    <form method="post" action="{{ url('/posteditkonsumen') }}">
        <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
        <input type="hidden" name="id" value="{{ $datakonsumen->id }}" />
        <div class="form-group">
            <label for="exampleInputEmail1">Konsumen</label>
            <input type="text" name="konsumen" value="{{ $datakonsumen->konsumen }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="exampleInputtext1">Jenis Kendaraan</label>
            <select type="select" name="jenis_kendaraan" class="form-control" required>
                @if ($datakonsumen->jenis_kendaraan == 'Mobil')
                <option value="Motor">Motor</option>
                <option selected value="Mobil">Mobil</option>
                @endif
                @if ($datakonsumen->jenis_kendaraan == 'Motor')
                <option selected value="Motor">Motor</option>
                <option value="Mobil">Mobil</option>
                @endif
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputtext1">No Polisi</label>
            <input type="text" name="no_polisi" value="{{ $datakonsumen->no_polisi }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="exampleInputtext1">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" value="{{ date('Y-m-d', strtotime($datakonsumen->tanggal_lahir)) }}"
                class="form-control" required>
        </div>
        <div class="form-group">
            <label for="exampleInputtext1">Jenis Kelamin</label>
            <select type="select" name="jenis_kelamin" class="form-control" required>
                <option selected disabled>pilih ....</option>
                @if ($datakonsumen->jenis_kelamin == 'L')
                <option selected value="L">L</option>
                <option value="P">P</option>
                @endif
                @if ($datakonsumen->jenis_kelamin == 'P')
                <option value="L">L</option>
                <option selected value="P">P</option>
                @endif
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputtext1">No Hp</label>
            <input type="text" value="{{ $datakonsumen->no_hp }}" name="no_hp" maxlength="13" class="form-control"
                required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
