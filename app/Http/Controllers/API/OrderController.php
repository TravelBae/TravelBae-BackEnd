<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\tb_order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return tb_order::all();
    }

    public function store(Request $request)
    {
        $request -> validate ([
            "id_customer" => "required:tb_order,id_customer",
        ], [
            "required" => "id customer harus ada"
        ]);
        return tb_order::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_order  $tb_order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return tb_order::find($id);
    }

    public function show_by_cus_id()
    {

        return tb_order::where('id_customer', auth('sanctum')->user()->id) -> get();
    }
}
