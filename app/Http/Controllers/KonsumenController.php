<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\konsumen;

class KonsumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Table Konsumen';
        $dataKonsumens = konsumen::all();

        return view('index', ['title' => $title, 'dataKonsumens' => $dataKonsumens]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get($id)
    {
        $datakonsumen = konsumen::where('id', $id)->first();
        $title = 'Konsumen ' . $datakonsumen->konsumen;

        return view('editkonsumen', ['title' => $title, 'datakonsumen' => $datakonsumen]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        konsumen::where('id', $request->id)->update([
            'konsumen' => $request->konsumen,
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'no_polisi' => $request->no_polisi,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_hp' => $request->no_hp,
        ]);

        return redirect(url('/'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datakonsumen = konsumen::where('id', $id)->first();
        $title = 'Konsumen ' . $datakonsumen->konsumen;

        return view('showkonsumen', ['title' => $title, 'datakonsumen' => $datakonsumen]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        konsumen::where('id', $id)->delete();

        return redirect(url('/'));
    }
}
