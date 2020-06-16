<?php

namespace App\Http\Controllers;

use App\Car;

use Illuminate\Http\Request;

class CarController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$car=Car::all();
        return view('cars.index',compact('car'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
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
            'registration' => 'required|min:2|max:8',
            'series' => 'required|min:0|max:191',
			'model' => 'required|min:1|max:191',
			'produced_on' => 'date|min:2|max:191',
			'full_mass' => 'integer|min:1|max:500000',
			'fuel_consumption' => 'between:0,99.99|min:0|max:4',
			'owner_id' => 'integer|min:2|max:191'
        ]);
		
        Car::create($request->all());

        return redirect()->route('cars.index')
                            ->with('success', 'New Car Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $request->validate([
			'registration' => 'required|min:2|max:8',
            'series' => 'required|min:0|max:191',
			'model' => 'required|min:1|max:191',
			'produced_on' => 'date|min:2|max:191',
			'full_mass' => 'integer|min:1|max:5',
			'fuel_consumption' => 'between:0,99.99|min:0|max:4',
			'owner_id' => 'unsigned_integer|min:2|max:191'
        ]);
		
        $car->update($request->all());

        return redirect()->route('cars.index')
                            ->with('success', 'Car Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
         $car->delete();

        return redirect()->route('cars.index')
                            ->with('success', 'Car Deleted Successfully!');
    }
}
