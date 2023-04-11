<?php

namespace App\Http\Controllers;

use App\Models\edukasi;
use Illuminate\Http\Request;

class edukasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(edukasi $edukasi)
    {
        return view('artikel', [
            'data' => $edukasi::all()
        ]);
    }

    public function find3(edukasi $edukasi)
    {
        return view('edukasi', [
            'data' => $edukasi::all()
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
     * @param  \App\Models\edukasi  $edukasi
     * @return \Illuminate\Http\Response
     */
    public function show(edukasi $edukasi)
    {
        return view('detArtikel', [
            'data' => $edukasi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\edukasi  $edukasi
     * @return \Illuminate\Http\Response
     */
    public function edit(edukasi $edukasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\edukasi  $edukasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, edukasi $edukasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\edukasi  $edukasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(edukasi $edukasi)
    {
        //
    }
}
