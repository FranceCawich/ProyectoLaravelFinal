<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\participants;

class participantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $participants = participants::all();

        return view('participants.index', ['participants' => $participants]);


        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('participants.create');
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
            'apellidoPaterno' => 'required|string|max:255',
            'apellidoMaterno' => 'required|string|max:255',
            'nombre' => 'required|string|max:255',
            'email'=>'required|string|max:255',
            'telefono'=>'required|string|max:255',
            'genero' => 'required|string|min:1',
          
            
        ]);

        $participants = participants::create($storeData);
        
        // return response()->json(['mensaje'=>'creación de evento exitoso'], 201);
        return redirect()->route('participants.index')->with('success', 'Evento actualizado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //    //bring 
        if (isset($id)) {
            $ev = DB::table('participants')->find($id);
            return response()->json(['participants'=>$ev]);
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
               //  $eventos = events::findOrFail($id);
               $participants = participants::findOrFail($id);
               return view('participants.edit', compact('participants'));
      
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
        $updateData = $request->validate([
            'apellidoPaterno' => 'required|string|max:255',
            'apellidoMaterno' => 'required|string|max:255',
            'nombre' => 'required|string|max:255',
            'email'=>'required|string|max:255',
            'telefono'=>'required|string|max:255',
            'genero' => 'required|string|min:1',

            
        
          
        ]);
        participants::whereId($id)->update($updateData);
        return redirect()->route('participants.index')->with('success', 'Evento actualizado con éxito');
        
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
        $ev = participants::find($id);
        
        $ev->delete();
        return redirect('/participants')->with('completed', 'asasd');  
    }
}