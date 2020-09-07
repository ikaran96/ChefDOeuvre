<?php

namespace App\Http\Controllers;

use App\ElevesContinue;
use Illuminate\Http\Request;

class ElevesContinueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.eleves.continues.eleves-cont');

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
     * @param  \App\ElevesContinue  $elevesContinue
     * @return \Illuminate\Http\Response
     */
    public function show(ElevesContinue $elevesContinue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ElevesContinue  $elevesContinue
     * @return \Illuminate\Http\Response
     */
    public function edit(ElevesContinue $elevesContinue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ElevesContinue  $elevesContinue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ElevesContinue $elevesContinue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ElevesContinue  $elevesContinue
     * @return \Illuminate\Http\Response
     */
    public function destroy(ElevesContinue $elevesContinue)
    {
        //
    }
}
