<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\tb_bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return tb_bank::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_bank  $tb_order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return tb_bank::find($id);
    }

}
