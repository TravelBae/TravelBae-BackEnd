<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Auth\RequestGuard;
use Tests\TestCase;

class OrderTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_success_createorder()
    {

        $response = $this->post('customer/order/create', [
            'id_customer' => '1',
            'id_tempat' => '1',
            'id_event' => '2',
            'nama_customer' => 'Made Dwija',
            'order_status' => 'Unconfirmed',
            'tanggal_beli' => '2022-06-21',
            'total_bayar' => '140000',
            'total_tiket' => '10',
            'bank' => 'Mandiri'
        ]);

        // dd($response);
        $response->assertStatus(404);
    }

    public function test_failed_createorder()
    {

        $response = $this->post('customer/order/create', [
            'id_customer' => '',
            'id_tempat' => '1',
            'id_event' => '2',
            'nama_customer' => 'Made Dwija',
            'order_status' => 'Unconfirmed',
            'tanggal_beli' => '2022-06-21',
            'total_bayar' => '140000',
            'total_tiket' => '10',
            'bank' => 'Mandiri'
        ]);

        // dd($response);
        $response->assertStatus(404);
    }


}
