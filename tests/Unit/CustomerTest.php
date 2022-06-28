<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Auth\RequestGuard;
use Tests\TestCase;

class CustomerTest extends TestCase
{
    public function test_success_updateprofile()
    {

        $response = $this->put('customer/1', [
            'username'=>'dwij',
            'email' => 'fai@gmail.com',
            'noHP' => '0811111111',
        ]);

        // dd($response);
        $response->assertStatus(404);
    }

    public function test_failed_updateprofile()
    {

        $response = $this->put('change-password/1', [
            'username'=>'dwij',
            'email' => '',
            'noHP' => '0811111111',
        ]);

        // dd($response);
        $response->assertStatus(404);
    }

    public function test_success_changepassword()
    {

        $response = $this->put('change-password/1', [
            'password'=>'123',
            'password_confirmation' => '123',
        ]);

        // dd($response);
        $response->assertStatus(404);
    }

    public function test_failed_changepassword()
    {

        $response = $this->put('change-password/1', [
            'password'=>'123',
            'password_confirmation' => '121',
        ]);

        // dd($response);
        $response->assertStatus(404);
    }

}
