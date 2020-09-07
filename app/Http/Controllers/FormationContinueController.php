<?php

namespace App\Http\Controllers;

use App\FormationContinue;
use Illuminate\Http\Request;

class FormationContinueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $continues = FormationContinue::all();
        return view('admin.formations.continues.forma-cont')->with(['continues'=>$continues]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formations.continues.ajouter');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        FormationContinue::create($request->all());
        return redirect()->route('continues.index')->with('message','Formation continue créée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FormationContinue  $formationContinue
     * @return \Illuminate\Http\Response
     */
    public function show(FormationContinue $formationContinue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FormationContinue  $formationContinue
     * @return \Illuminate\Http\Response
     */
    public function edit(FormationContinue $continue)
    {
        return view('admin.formations.continues.edit', compact('continue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FormationContinue  $formationContinue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormationContinue $continue)
    {
        $continue->update(['name' => $request->name]);
        return redirect()->back()->with('message','Modification ajoutée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FormationContinue  $formationContinue
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormationContinue $continue)
    {
        $continue->delete();
        return redirect()->back()->with('message', 'Formation supprimée');

    }
}
