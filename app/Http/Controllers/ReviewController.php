<?php

namespace App\Http\Controllers;

use App\Review;

use Illuminate\Http\Request;

use DB;

use Gate;

use App\Car;

class ReviewController extends Controller



{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('reviews.create',compact('id'));
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
            'Review' => 'required',
			'registration' => 'required',
        ]);
		
        Review::create($request->all());
		
		

        return redirect()->route('reviews.show', $request->registration)->with('success', 'New review added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$result = DB::table('reviews')->where('registration', $id)->get();
		if($result->isEmpty()){
			return redirect()->route('cars.show', $id);
     
		}
         return view('reviews.show', compact('result'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        return view('reviews.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
             $request->validate([
			'review' => 'required',
        ]);
		
        $review->update($request->all());

        return redirect()->route('reviews.show')
                            ->with('success', 'Review updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
		$res = $review->registration;
        $review->delete();

        return redirect()->route('reviews.show',$res)
                            ->with('success', 'Review Deleted Successfully!');
    }
}
