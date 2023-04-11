<?php

namespace App\Http\Controllers;

use App\Models\edukasi;
use Illuminate\Http\Request;

class dashAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/dashboard/index');
    }

    public function edukasi()
    {
        return view('/dashboard/edukasiDash', [
            'data' => edukasi::all()
        ]);
    }

    public function formEdukasi()
    {
        return view('createEdukasi');
    }

    public function createEdukasi(Request $request)
    {
        $validate = $request ->validate([
            'title' => 'required|max:20|unique',
            'exert' => 'required|max:30',
            'body' => 'required'
        ]);

        edukasi::create($validate);
        return redirect('dashAdmin/edukasiDash')->with('success', 'New Edukasi was created');
    }

    public function editEdukasi(edukasi $edukasi)
    {
        return view('editEdukasi', [
            'data' => $edukasi
        ]);
    }

    public function updateEdukasi(Request $request, edukasi $edukasi)
    {
        $validate = $request ->validate([
            'title' => 'required|max:20|unique',
            'exert' => 'required|max:30',
            'body' => 'required'
        ]);
        // edukasi::where('id', $edukasi->id)->update($validate);
        edukasi::updateOrCreate($validate);
        return redirect('dashAdmin/edukasiDash')->with('success', 'Edukasi Edited');
    }

    public function deleteEdukasi(edukasi $edukasi)
    {
        edukasi::destroy($edukasi->id);
        return redirect('/dashAdmin/edukasiDash')->with('success', 'Edukasi was deleted!');
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
