<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\tour_place;
use Illuminate\Http\Request;

class TourismPlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return tour_place::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate ([
            "nama_tempat" => "unique:tb_tour_places|required"
        ], [
            "unique" => "nama dah diisi moumen"
        ]);
        return tour_place::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tour_place  $tour_place
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return tour_place::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tour_place  $tour_place
     * @return \Illuminate\Http\Response
     */
    public function edit(tour_place $tour_place)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tour_place  $tour_place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $place = tour_place::find($id);
        if ($place -> nama_tempat != $request -> nama_tempat) {
            $request -> validate ([
                "nama_tempat" => "unique:tb_tour_places|required"
            ], [
                "unique" => "nama dah diisi moumen"
            ]);
        }
        $place->update($request->all());
        return $place;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tour_place  $tour_place
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return tour_place::destroy($id);
    }
}
