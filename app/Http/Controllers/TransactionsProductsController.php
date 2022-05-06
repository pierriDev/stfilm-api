<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransactionsProductsRequest;
use App\Http\Requests\UpdateTransactionsProductsRequest;
use App\Models\TransactionsProducts;

class TransactionsProductsController extends Controller
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
     * @param  \App\Http\Requests\StoreTransactionsProductsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransactionsProductsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TransactionsProducts  $transactionsProducts
     * @return \Illuminate\Http\Response
     */
    public function show(TransactionsProducts $transactionsProducts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TransactionsProducts  $transactionsProducts
     * @return \Illuminate\Http\Response
     */
    public function edit(TransactionsProducts $transactionsProducts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransactionsProductsRequest  $request
     * @param  \App\Models\TransactionsProducts  $transactionsProducts
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransactionsProductsRequest $request, TransactionsProducts $transactionsProducts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TransactionsProducts  $transactionsProducts
     * @return \Illuminate\Http\Response
     */
    public function destroy(TransactionsProducts $transactionsProducts)
    {
        //
    }
}
