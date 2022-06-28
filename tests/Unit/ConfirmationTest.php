<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Auth\RequestGuard;
use Tests\TestCase;

class ConfirmationTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_success_confirmation() {

        $response = $this->get('/admin/confirmation/1', [

        ]);

        $response->assertStatus(404);
    }
}
