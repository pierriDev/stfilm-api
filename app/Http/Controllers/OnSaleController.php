<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOnSaleRequest;
use App\Http\Requests\UpdateOnSaleRequest;
use App\Models\OnSale;

class OnSaleController extends Controller
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
     * @param  \App\Http\Requests\StoreOnSaleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOnSaleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OnSale  $onSale
     * @return \Illuminate\Http\Response
     */
    public function show(OnSale $onSale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OnSale  $onSale
     * @return \Illuminate\Http\Response
     */
    public function edit(OnSale $onSale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOnSaleRequest  $request
     * @param  \App\Models\OnSale  $onSale
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOnSaleRequest $request, OnSale $onSale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OnSale  $onSale
     * @return \Illuminate\Http\Response
     */
    public function destroy(OnSale $onSale)
    {
        //
    }
}
