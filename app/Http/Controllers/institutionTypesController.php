<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\institutionTypes;

class institutionTypesController extends Controller
{
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
        $institutionTypes = institutionTypes::all();

        return view('institutionTypes.index', ['institutionTypes' => $institutionTypes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('institutionTypes.create');
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
        $storeData = $request->validate([
            'tipo' => 'required|string|max:255',
            
          
          
            
        ]);

        $institutionTypes= institutionTypes::create($storeData);
        
        // return response()->json(['mensaje'=>'creación de evento exitoso'], 201);
        return redirect()->route('institutionTypes.index')->with('success', 'Evento actualizado con éxito');
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
        if (isset($id)) {
            $ev = DB::table('institution_types')->find($id);
            return response()->json(['institutionTypes'=>$ev]);
        }
        else {
            return response()->json(['mensaje'=>'No ']);

        }
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
        $institutionTypes= institutionTypes::findOrFail($id);
        return view('institutionTypes.edit', compact('institutionTypes'));
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
            'tipo' => 'required|string|max:255',
            
          
          
            
        ]);
            
        
          

        institutionTypes::whereId($id)->update($updateData);
        return redirect()->route('institutionTypes.index')->with('success', 'Evento actualizado con éxito');
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
        $ev = institutionTypes::find($id);
        
        $ev->delete();
        return redirect('/institutionTypes')->with('completed', 'asasd');  
    }
}