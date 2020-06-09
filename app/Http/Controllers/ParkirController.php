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
        $waktu_masuk = strtotime($request->waktu_masuk);
        $waktu_keluar = strtotime($request->waktu_keluar);

        if ($request->jenis_kendaraan == 'Motor') {
            $first = 2000;
            $next = 500;
        } else {
            $first = 5000;
            $next = 1000;
        }

        $totalWaktu = (intval($waktu_keluar)) - (intval($waktu_masuk));
        $jamselisih    = floor($totalWaktu / (60 * 60));
        $menit    = $totalWaktu - $jamselisih * (60 * 60);
        $menitselisih = floor($menit / 60);

        $getDetik_jamselisih = ($jamselisih * (60 * 60));
        $getDetik_menitselisih = ($menitselisih * 60);
        $waktuparkir = ($getDetik_jamselisih + $getDetik_menitselisih);

        if ($waktuparkir <= 3600) {
            $biaya = $first;
        } elseif ($waktuparkir > 3600) {
            $jam = ceil($waktuparkir / (60 * 60));
            $nexts = $next * ($jam - 1);
            $biaya = $first + $nexts;
        } else {
            $biaya = 0;
        }

        return json_encode($biaya);
    }

    public function ViewTransaksi(Request $request)
    {

        $waktu_masuk = strtotime($request->waktu_masuk);
        $waktu_keluar = strtotime($request->waktu_keluar);

        if ($request->jenis_kendaraan == 'Motor') {
            $first = 2000;
            $next = 500;
        } else {
            $first = 5000;
            $next = 1000;
        }

        $totalWaktu = (intval($waktu_keluar)) - (intval($waktu_masuk));
        $jamselisih    = floor($totalWaktu / (60 * 60));
        $menit    = $totalWaktu - $jamselisih * (60 * 60);
        $menitselisih = floor($menit / 60);

        $getDetik_jamselisih = ($jamselisih * (60 * 60));
        $getDetik_menitselisih = ($menitselisih * 60);
        $waktuparkir = ($getDetik_jamselisih + $getDetik_menitselisih);

        if ($waktuparkir <= 3600) {
            $biaya = $first;
        } elseif ($waktuparkir > 3600) {
            $jam = ceil($waktuparkir / (60 * 60));
            $nexts = $next * ($jam - 1);
            $biaya = $first + $nexts;
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
