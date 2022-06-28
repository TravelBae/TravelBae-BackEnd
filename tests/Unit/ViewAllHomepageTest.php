<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Auth\RequestGuard;
use Tests\TestCase;

class ViewAllHomepageTest extends TestCase
{
    public function test_success_confirmation() {

        $response = $this->get('owner/homepage', [

        ]);

        $response->assertStatus(404);
    }
}
