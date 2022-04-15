<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return event::all();
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
        $validator = Validator::make($request->all(),[
            "nama_event" => "unique:tb_events|required"
        ], [
            "unique" => "Name already used!",
            "required" => "Please enter event name!"
        ]);

        if ($validator->fails()) {
            return [
                'message' => $validator->errors()
            ];
        }

        return event::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return event::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = event::find($id);
        if ($event -> nama_event != $request -> nama_event) {
            $validator = Validator::make($request->all(),[
                "nama_event" => "unique:tb_events|required"
            ], [
                "unique" => "Name already used!",
                "required" => "Please enter event name!"
            ]);
    
            if ($validator->fails()) {
                return [
                    'message' => $validator->errors()
                ];
            }
        }
        $event->update($request->all());
        return $event;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return event::destroy($id);
    }
}
