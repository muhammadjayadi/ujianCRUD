<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ujian;


class UjianController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ujian = ujian::all();
        return view('ujian.index', ['ujians' => $ujian]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ujian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_mk' => 'required',
            'dosen' => 'required',
            'jumlah_soal' => 'required',
            'keterangan' => 'required'
        ]);

        ujian::create($request->all());

        return redirect('/ujian')->with('status', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *@param  int  $id
     * @param  \App\ujian $ujian
     * @return \Illuminate\Http\Response
     */
    public function edit(ujian $ujian)
    {
        return view('ujian.edit', compact('ujian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @param  \App\ujian $ujian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ujian $ujian)
    {
        Ujian::where('id', $ujian->id)
            ->update([
                'nama_mk' => $request->nama_mk,
                'dosen' => $request->dosen,
                'jumlah_soal' => $request->jumlah_soal,
                'keterangan' => $request->keterangan,
            ]);


        return redirect('/ujian')->with('status', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @param \App\ujian
     * @return \Illuminate\Http\Response
     */
    public function destroy(ujian $ujian)
    {
        ujian::destroy($ujian->id);
        return redirect('/ujian')->with('status', 'Data Berhasil Dihapus!');
    }
}