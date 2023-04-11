<?php

namespace App\Http\Controllers;

use App\Models\apotek;
use Illuminate\Http\Request;

class apotekterdekatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dbApo = apotek::all();
        return view('apotekterdekat', [
            "data" => $dbApo
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
     * @param  \App\Http\Requests\StoreapotekterdekatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreapotekterdekatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\apotekterdekat  $apotekterdekat
     * @return \Illuminate\Http\Response
     */
    public function show(apotekterdekat $apotekterdekat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\apotekterdekat  $apotekterdekat
     * @return \Illuminate\Http\Response
     */
    public function edit(apotekterdekat $apotekterdekat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateapotekterdekatRequest  $request
     * @param  \App\Models\apotekterdekat  $apotekterdekat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateapotekterdekatRequest $request, apotekterdekat $apotekterdekat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\apotekterdekat  $apotekterdekat
     * @return \Illuminate\Http\Response
     */
    public function destroy(apotekterdekat $apotekterdekat)
    {
        //
    }
}
