<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuoteRequest;
use App\Http\Requests\UpdateQuoteRequest;
use App\Models\QuotesTampilan;
use Illuminate\Http\Request;

class QuotesTampilanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = QuotesTampilan::all();
        return view('quotes.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quotes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuoteRequest $request)
    {
        QuotesTampilan::create($request->validated());
        return redirect('/tulisan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuotesTampilan  $quotesTampilan
     * @return \Illuminate\Http\Response
     */
    public function show(QuotesTampilan $quotesTampilan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuotesTampilan  $quotesTampilan
     * @return \Illuminate\Http\Response
     */
    public function edit(QuotesTampilan $tulisan)
    {
        return view('quotes.edit', compact('tulisan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\QuotesTampilan  $quotesTampilan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuoteRequest $request, QuotesTampilan $tulisan)
    {
        $tulisan->update($request->validated());
        return redirect('/tulisan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuotesTampilan  $quotesTampilan
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuotesTampilan $tulisan)
    {
        $tulisan->delete();
        return redirect('/tulisan');
    }
}
