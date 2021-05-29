<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Absen;


class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        $siswaselect = Siswa::select('nama', 'nis')->get();
        $siswawhere = Siswa::where('nis', '=', '1001')->get();
        $siswajoin = Absen::join('siswa', 'anis', '=', 'nis')->get();
        $siswajoinlike = Absen::join('siswa', 'anis', '=', 'nis')
            ->where('absen', 'like', 'A')->get();
        return view('data0100', [
            'siswa' => $siswa,
            'siswawhere' => $siswawhere,
            'siswaselect' => $siswaselect,
            'siswajoin' => $siswajoin,
            'siswajoinlike' => $siswajoinlike
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
