<?php

namespace App\Http\Controllers;

use App\Models\spesialis;
use Illuminate\Http\Request;

class spesialisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spesialis = spesialis::orderBy('spesialis', 'ASC')->get();
        return view('dashboard.spesialis.index', compact('spesialis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request ->validate([
            'spesialis' => 'required|String|unique',
        ]);

        edukasi::create($validate);
        return redirect(route('spesialis.index'))->with('success', 'New Edukasi was created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\spesialis  $spesialis
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $spesialis = spesialis::orderBy('spesialis', 'ASC')->get();
        return view('dashboard.spesialis.create', compact('spesialis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\spesialis  $spesialis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, spesialis $spesialis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\spesialis  $spesialis
     * @return \Illuminate\Http\Response
     */
    public function destroy(spesialis $spesialis)
    {
        //
    }
}
