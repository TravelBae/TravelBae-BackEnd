<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Auth\RequestGuard;
use App\Models\tb_customer;
use App\Models\tb_admin;
use App\Models\tb_owner;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_role1_login() {

        $response = $this->post('/login', [
            'username' => 'dwija',
            'password' => '123',
            'role_id' => '1'
        ]);

        $response->assertStatus(302);
    }

    public function test_role2_login() {

        $response = $this->post('/login', [
            'username' => 'dwija',
            'password' => '123',
            'role_id' => '2'
        ]);

        $response->assertStatus(302);
    }

    public function test_role3_login() {

        $response = $this->post('/login', [
            'username' => 'dwija',
            'password' => '123',
            'role_id' => '3'
        ]);

        $response->assertStatus(302);
    }

    public function test_failed_login() {

        $response = $this->post('/login', [
            'username' => 'dwija',
            'password' => '123',
            'role_id' => 0
        ]);

        $response->assertStatus(302);
    }
}
