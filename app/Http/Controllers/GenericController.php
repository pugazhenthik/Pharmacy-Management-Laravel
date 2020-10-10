<?php

namespace App\Http\Controllers;

use App\Models\Generic;
use Illuminate\Http\Request;
use App\Request\GenericRequest;
use JsValidator;
class GenericController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generics = Generic::orderBy('generic_id','desc');
        return view('Backend.pages.Generic.index',compact('generics'));
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
     * @param  \App\Models\Generic  $generic
     * @return \Illuminate\Http\Response
     */
    public function show(Generic $generic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Generic  $generic
     * @return \Illuminate\Http\Response
     */
    public function edit(Generic $generic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Generic  $generic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Generic $generic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Generic  $generic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Generic $generic)
    {
        //
    }
}