<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\tb_customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return tb_customer::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_customer  $tb_customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return tb_customer::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tb_customer  $tb_customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tb_customer = tb_customer::find($id);
        if ($tb_customer -> username != $request -> username) {
            $validator = Validator::make($request->all(),[
                'username' => 'required|string|unique:tb_customers,username,'.$tb_customer->id.',id',
                'noHP' => 'required|string|unique:tb_customers,noHP,'.$tb_customer->id.',id',
                'email' => 'required|string|email:dns|unique:tb_customers,email,'.$tb_customer->id.',id'
            ], [
                "username.unique" => "Username already used!",
                "username.required" => "Username kudu diisi!",
                "noHP.unique" => "noHP already used!",
                "noHP.required" => "noHP kudu diisi!",
                "email.unique" => "email already used!",
                "email.required" => "email kudu diisi!"
            ]);

            if ($validator->fails()) {
                return [
                    'message' => $validator->errors()
                ];
            }
        }

        $tb_customer->update($request->all());
        return $tb_customer;
    }

    public function change_password(Request $request, $id)
    {
        $tb_customer = tb_customer::find($id);
        if ($tb_customer -> username != $request -> username) {
            $validator = Validator::make($request->all(),[
                'password' => 'required|string|confirmed'
            ], [
                "required" => "password kudu diisi!",
                "confirmed" => "password heunteu sarua!"
            ]);

            if ($validator->fails()) {
                return [
                    'message' => $validator->errors()
                ];
            }
        }
        $tb_customer->update($request->all());
        return $tb_customer;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_customer  $tb_customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return tb_customer::destroy($id);
    }
}
