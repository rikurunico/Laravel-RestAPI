<?php

namespace App\Http\Controllers;

use App\Http\Resources\QuoteResource;
use App\Models\quote;
use Illuminate\Http\Request;

class QuotesControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(quote::all());
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
     * @param  \App\Models\quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function show(quote $quote)
    {
        return new QuoteResource($quote);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, quote $quote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function destroy(quote $quote)
    {
        //
    }
}
