<?php

namespace App\Http\Controllers;

use App\Formation;
use App\FormationDiplomante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\FormationDiplomanteRequest;

class FormationDiplomanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $diplomantes = FormationDiplomante::all();
        return view('admin.formations.diplomantes.forma-dip')->with(['diplomantes'=>$diplomantes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ecoles = Formation::all();
        return view('admin.formations.diplomantes.ajouter')->with(['ecoles'=>$ecoles]);
    }

    public function update(FormationDiplomanteRequest $request, FormationDiplomante $diplomante)
    {
        $diplomante->update(['name' => $request->name]);
        return redirect()->back()->with('message','Modification ajoutée');
    }

    // public function update(Request $request, $diplomante)
    // {
        
    //     $diplomante = FormationDiplomante::find($id);

    //     $diplomante->name = $request->get('name');
 
        
    //     $diplomante->save();
    //     if($diplomante){
    //         return redirect()->back();
    //     }
    // }

    // public function update(Request $request, FormationDiplomante $diplomante)
    // {
    //     $diplomante->update(['name' => $request->name]);
     
    //     return redirect()->back()->with('message', 'updated');
    // }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormationDiplomanteRequest $request)
    {
        // $request->validate([
        //     'name' => 'required',
        // ]);

        // $rules =[
        //     'name'=>'required'
        // ];
        // $messages=[
        //     'name.required' => 'Veuillez ajouter un nom à la formation',
        // ];

        // $validator=Validator::make($request->all(),$rules,$messages);
        // if($validator->fails()){
        //     return redirect()->back()
        //     ->withErrors($validator)
        //     ->withInput();
        // }
        // if(!$request->name){
        //     return redirect()->route('diplomantes.create')->with('error','Veuillez ajouter un nom');
        // }
        FormationDiplomante::create($request->all());
        return redirect()->route('diplomantes.index')->with('message','Formation diplômante créée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FormationDiplomante  $formationDiplomante
     * @return \Illuminate\Http\Response
     */
    public function show(FormationDiplomante $formationDiplomante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FormationDiplomante  $formationDiplomante
     * @return \Illuminate\Http\Response
     */
    public function edit(FormationDiplomante $diplomante)
    {
        return view('admin.formations.diplomantes.edit', compact('diplomante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FormationDiplomante  $formationDiplomante
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FormationDiplomante  $formationDiplomante
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormationDiplomante $diplomante)
    {
        $diplomante->delete();
        return redirect()->back()->with('message', 'Formation supprimée');
    }
}
