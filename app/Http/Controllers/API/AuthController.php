<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\RequestGuard;
use App\Models\tb_admin;
use App\Models\tb_owner;

class AuthController extends Controller
{
    public function login(Request $req)
    {
        $validator_role = $req -> validate ([
            'role_id' => 'required|string'
        ]);

        $validator = $req -> validate ([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        if ($validator_role['role_id'] == "1") {
            $admin = tb_admin::where('username', $validator['username']) -> first();

            if(!$admin || !($admin->password == $validator["password"])) {
                return response([
                    "message" => "Username or Password can't be found",
                ], 400);
            }
            $token = $admin->createToken("secret") -> plainTextToken;

        } else if ($validator_role['role_id'] == "2") {

            $owner = tb_owner::where('username', $validator['username']) -> first();

            if(!$owner || !($owner->password == $validator["password"])) {
                return response([
                    "message" => "Username or Password can't be found",
                ], 400);
            }

            $token = $owner->createToken("secret") -> plainTextToken;
        }
        return response([
            'message' => 'Success to login',
            'token' => $token,
            'username' => $validator['username'],
            'role_id' => $validator_role['role_id']
        ], 200);
    }

    public function logout(Request $req)
    {
        $req->user()->currentAccessToken()->delete();

        return response([
            "message"=>"Account has been log out"
        ], 200);
    }

    public function check_token()
    {
        return response([
            'username' => auth('sanctum')->user()->username,
            'role_id' => auth('sanctum')->user()->role_id,
            'is_valid' => (auth('sanctum')->check()?1:0)
        ]);
    }
}
