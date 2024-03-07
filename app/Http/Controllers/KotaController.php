<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = Kota::all();
        $data = Kota::orderBy('id', 'desc')->get();

        return view('kota.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // print_r($request->all());
        $kota = new Kota();
        $kota->nama = $request->input('nama');
        $kota->provinsi = $request->input('provinsi');

        $kota->save();

        return redirect()->route('kotas.index')->with('message', 'Data berhasil disimpan !');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {  
        $datanya = Kota::find($id);

        return view('kota.show', ['data' => $datanya]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Kota::find($id);

        return view('kota.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kota $kota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kota $kota)
    {
        //
    }
}
