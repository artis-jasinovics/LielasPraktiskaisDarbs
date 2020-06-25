<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Rent;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       	$rent=Rent::all();
        return view('rents.index',compact('rent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('rents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'rented_from' => 'required|date',
            'rented_to' => 'required|date'
        ]);
		
        Rent::create($request->all());

        return redirect()->route('rents.show')->with('success', 'New Car rental Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Rent $rent)
    {
        return view('rents.show', compact('rent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Rent $rent)
    {
        return view('rents.edit', compact('rent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rent $rent)
    {
        $request->validate([
            'rented_from' => 'required|date',
            'rented_to' => 'required|date'
        ]);
		
        $rent->update($request->all());

        return redirect()->route('rents.show')
                            ->with('success', 'Rent Updated Successfully!');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rent $rent)
    {
        $rent->delete();

        return redirect()->route('rents.show')
                            ->with('success', 'Car Deleted Successfully!');
    }
}
