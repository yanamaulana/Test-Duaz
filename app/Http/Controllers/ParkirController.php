<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaksiparkir;

class ParkirController extends Controller
{
    public function index()
    {
        $title = "Transaksi Parkir";

        return view('transaksiparkir', ['title' => $title]);
    }
    public function list()
    {
        $title = "Table Parkir";
        $data = transaksiparkir::all();

        return view('listparkir', ['title' => $title, 'parkir' => $data]);
    }

    public function getbiaya(Request $request)
    {
        $waktu_masuk = date('H', strtotime($request->waktu_masuk));
        $waktu_keluar = date('H', strtotime($request->waktu_keluar));
        if ($request->jenis_kendaraan == 'Motor') {
            $first = 2000;
            $next = 500;
        } else {
            $first = 5000;
            $next = 1000;
        }

        $totalWaktu = (intval($waktu_keluar)) - (intval($waktu_masuk));

        if ($totalWaktu == 0) {
            $biaya = $first;
        } else if ($totalWaktu > 0) {
            $waktu = $totalWaktu - 1;
            $biayaNext = $waktu * $next;
            $biaya = $first + $biayaNext;
        } else {
            $biaya = 0;
        }

        return json_encode($biaya);
    }

    public function ViewTransaksi(Request $request)
    {
        $waktu_masuk = date('H', strtotime($request->waktu_masuk));
        $waktu_keluar = date('H', strtotime($request->waktu_keluar));
        if ($request->jenis_kendaraan == 'Motor') {
            $first = 2000;
            $next = 500;
        } else {
            $first = 5000;
            $next = 1000;
        }

        $totalWaktu = (intval($waktu_keluar)) - (intval($waktu_masuk));

        if ($totalWaktu == 0) {
            $biaya = $first;
        } else if ($totalWaktu > 0) {
            $waktu = $totalWaktu - 1;
            $biayaNext = $waktu * $next;
            $biaya = $first + $biayaNext;
        } else {
            $biaya = 0;
        }

        transaksiparkir::insert([
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'no_polisi' => $request->no_polisi,
            'tgl_transaksi' => $request->tanggal_transaksi,
            'waktu_masuk' => $request->waktu_masuk,
            'waktu_keluar' => $request->waktu_keluar,
            'biaya' => $biaya,
        ]);

        return redirect(url('/list'));
    }
}
