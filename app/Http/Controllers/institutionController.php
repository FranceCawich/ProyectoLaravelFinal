<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\institutions;
use App\Models\institutionTypes;
class institutionController extends Controller
{
   //authentication
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        ///return view('insitution.index', ['institution' => $institution]);

///inner joint  
        $institutcion = institutions::join('institution_types', 'institution_types.id', '=', 'institutions.institution_type_id')
        ->select('institutions.*', 'institution_types.tipo')
        ->get();
        return view('institutions.index', ['institutcion' => $institutcion]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $institutcion = institutionTypes::all();
        return view('institutions.create', ['institutcion' => $institutcion]);


        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'NombreCorto' => 'required|string|max:255',
            'NombreLargo' => 'required|string|max:255',
            'institution_type_id' => 'required|string|max:255'
            
            
        ]);

        
        //
        $institutcion = institutions::create($storeData);
        return redirect()->route('institutions.index')->with('success', 'Evento actualizado con éxito');

        
        
    
        
        

     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $institutcion = institutions::find($id);
        $institutcionType = institutionTypes::all();
        return view('institutions.edit', ['institutcion' => $institutcion, 'institutcionType' => $institutcionType]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $updateData = $request->validate([
            'NombreCorto' => 'required|string|max:255',
            'NombreLargo' => 'required|string|max:255',
            'institution_type_id' => 'required|string|max:255'
            
            
        ]);
        institutions::whereId($id)->update($updateData);
        return redirect()->route('institutions.index')->with('success', 'Evento actualizado con éxito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $institutcion = institutions::find($id);
        $institutcion->delete();
        return redirect()->route('institutions.index')->with('success', 'Evento actualizado con éxito');

    }
}