<?php

namespace App\Http\Controllers;

use App\Models\rsterdekat;
use App\Models\rumahSakit;
use Illuminate\Http\Request;

class rsTerdekatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dbRs = rumahSakit::all();

        return view('rsterdekat', [
            "data" => $dbRs
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
     * @param  \App\Http\Requests\StorersterdekatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorersterdekatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rsterdekat  $rsterdekat
     * @return \Illuminate\Http\Response
     */
    public function show(rsterdekat $rsterdekat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rsterdekat  $rsterdekat
     * @return \Illuminate\Http\Response
     */
    public function edit(rsterdekat $rsterdekat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatersterdekatRequest  $request
     * @param  \App\Models\rsterdekat  $rsterdekat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatersterdekatRequest $request, rsterdekat $rsterdekat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rsterdekat  $rsterdekat
     * @return \Illuminate\Http\Response
     */
    public function destroy(rsterdekat $rsterdekat)
    {
        //
    }
}
