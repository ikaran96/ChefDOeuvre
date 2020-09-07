<?php

namespace App\Http\Controllers;

use App\EleveDiplomante;
use Illuminate\Http\Request;

class EleveDiplomanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.eleves.diplomantes.eleves-dip');
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
     * @param  \App\EleveDiplomante  $eleveDiplomante
     * @return \Illuminate\Http\Response
     */
    public function show(EleveDiplomante $eleveDiplomante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EleveDiplomante  $eleveDiplomante
     * @return \Illuminate\Http\Response
     */
    public function edit(EleveDiplomante $eleveDiplomante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EleveDiplomante  $eleveDiplomante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EleveDiplomante $eleveDiplomante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EleveDiplomante  $eleveDiplomante
     * @return \Illuminate\Http\Response
     */
    public function destroy(EleveDiplomante $eleveDiplomante)
    {
        //
    }
}
