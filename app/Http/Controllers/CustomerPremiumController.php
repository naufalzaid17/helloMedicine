<?php

namespace App\Http\Controllers;

use App\Models\customerPremium;
use App\Http\Requests\StorecustomerPremiumRequest;
use App\Http\Requests\UpdatecustomerPremiumRequest;

class CustomerPremiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorecustomerPremiumRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecustomerPremiumRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customerPremium  $customerPremium
     * @return \Illuminate\Http\Response
     */
    public function show(customerPremium $customerPremium)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customerPremium  $customerPremium
     * @return \Illuminate\Http\Response
     */
    public function edit(customerPremium $customerPremium)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecustomerPremiumRequest  $request
     * @param  \App\Models\customerPremium  $customerPremium
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecustomerPremiumRequest $request, customerPremium $customerPremium)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customerPremium  $customerPremium
     * @return \Illuminate\Http\Response
     */
    public function destroy(customerPremium $customerPremium)
    {
        //
    }
}
