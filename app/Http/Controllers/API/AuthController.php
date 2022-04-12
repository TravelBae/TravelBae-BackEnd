<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\tb_admin;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function login(Request $req)  {
        $validator = $req -> validate ([
            'username_admin' => 'required|string',
            'password_admin' => 'required|string'
        ]);

        $admin = tb_admin::where('username_admin', $validator['username_admin']) -> first();

        // if(!$admin || !Hash::check($admin->password_admin, $validator["password_admin"])) {
        //     return response([
        //         "message" => "username or password can't be found",
        //     ], 400);
        // }

        if(!$admin || !($admin->password_admin == $validator["password_admin"])) {
            return response([
                "message" => "username or password can't be found",
            ], 400);
        }
        $token = $admin->createToken("secret") -> plainTextToken;
        return response([
            'message' => 'success to login',
            'token' => $token
        ], 200);
    }

    public function logout(Request $req) {
        $req->user()->currentAccessToken()->delete();

        return response([
            "message"=>"log out"
        ], 200);
    }
}
