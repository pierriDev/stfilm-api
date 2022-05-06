<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAvaliationRequest;
use App\Http\Requests\UpdateAvaliationRequest;
use App\Models\Avaliation;

class AvaliationController extends Controller
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
     * @param  \App\Http\Requests\StoreAvaliationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAvaliationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Avaliation  $avaliation
     * @return \Illuminate\Http\Response
     */
    public function show(Avaliation $avaliation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Avaliation  $avaliation
     * @return \Illuminate\Http\Response
     */
    public function edit(Avaliation $avaliation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAvaliationRequest  $request
     * @param  \App\Models\Avaliation  $avaliation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAvaliationRequest $request, Avaliation $avaliation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Avaliation  $avaliation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avaliation $avaliation)
    {
        //
    }
}
