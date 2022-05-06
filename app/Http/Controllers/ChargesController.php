<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreChargesRequest;
use App\Http\Requests\UpdateChargesRequest;
use App\Models\Charges;

class ChargesController extends Controller
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
     * @param  \App\Http\Requests\StoreChargesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChargesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Charges  $charges
     * @return \Illuminate\Http\Response
     */
    public function show(Charges $charges)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Charges  $charges
     * @return \Illuminate\Http\Response
     */
    public function edit(Charges $charges)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChargesRequest  $request
     * @param  \App\Models\Charges  $charges
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChargesRequest $request, Charges $charges)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Charges  $charges
     * @return \Illuminate\Http\Response
     */
    public function destroy(Charges $charges)
    {
        //
    }
}
