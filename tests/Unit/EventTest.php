<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Auth\RequestGuard;
use Tests\TestCase;

class EventTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_success_createevent()
    {

        $response = $this->post('event', [
            'nama_event' => 'PADI Open Water',
            'kategori' => '2',
            'tipe' => 'Entertainment',
            'regulasi' => 'Temukan petualangan baru atau sekadar melihat dunia di bawah ombak Bali dengan mencoba kursus menyelam oleh Bali DivingTemukan petualangan baru atau sekadar melihat dunia di bawah ombak Bali dengan mencoba kursus menyelam oleh Bali Diving',
            'stok' => '200',
            'harga' => '10000',
            'jam_mulai' => '090000',
            'alamat' => 'Penebel, Tabanan, Bali, Indonesia',
            'img_tempat' => 'https://firebasestorage.googleapis.com/v0/b/travelbae-9f9a6.appspot.com/o/padi_openwater.jpeg?alt=media&token=a5584144-8e74-46fd-a228-065f543e3dd3',
        ]);

        // dd($response);
        $response->assertStatus(404);
    }

    public function test_failed_createevent()
    {

        $response = $this->post('event', [
            'nama_event' => '',
            'kategori' => '2',
            'tipe' => 'Entertainment',
            'regulasi' => 'Temukan petualangan baru atau sekadar melihat dunia di bawah ombak Bali dengan mencoba kursus menyelam oleh Bali DivingTemukan petualangan baru atau sekadar melihat dunia di bawah ombak Bali dengan mencoba kursus menyelam oleh Bali Diving',
            'stok' => '200',
            'harga' => '10000',
            'jam_mulai' => '090000',
            'alamat' => 'Penebel, Tabanan, Bali, Indonesia',
            'img_tempat' => 'https://firebasestorage.googleapis.com/v0/b/travelbae-9f9a6.appspot.com/o/padi_openwater.jpeg?alt=media&token=a5584144-8e74-46fd-a228-065f543e3dd3',
        ]);

        $response->assertStatus(404);
    }

    public function test_success_updateevent()
    {

        $response = $this->put('event', [
            'nama_event' => 'PADI Open Water',
            'kategori' => '2',
            'tipe' => 'Entertainment',
            'regulasi' => 'Temukan petualangan baru atau sekadar melihat dunia di bawah ombak Bali dengan mencoba kursus menyelam oleh Bali DivingTemukan petualangan baru atau sekadar melihat dunia di bawah ombak Bali dengan mencoba kursus menyelam oleh Bali Diving',
            'stok' => '200',
            'harga' => '10000',
            'jam_mulai' => '090000',
            'alamat' => 'Penebel, Tabanan, Bali, Indonesia',
            'img_tempat' => 'https://firebasestorage.googleapis.com/v0/b/travelbae-9f9a6.appspot.com/o/padi_openwater.jpeg?alt=media&token=a5584144-8e74-46fd-a228-065f543e3dd3',
        ]);

        // dd($response);
        $response->assertStatus(404);
    }

    public function test_failed_updateevent()
    {

        $response = $this->put('event', [
            'nama_event' => '',
            'kategori' => '2',
            'tipe' => 'Entertainment',
            'regulasi' => 'Temukan petualangan baru atau sekadar melihat dunia di bawah ombak Bali dengan mencoba kursus menyelam oleh Bali DivingTemukan petualangan baru atau sekadar melihat dunia di bawah ombak Bali dengan mencoba kursus menyelam oleh Bali Diving',
            'stok' => '200',
            'harga' => '10000',
            'jam_mulai' => '090000',
            'alamat' => 'Penebel, Tabanan, Bali, Indonesia',
            'img_tempat' => 'https://firebasestorage.googleapis.com/v0/b/travelbae-9f9a6.appspot.com/o/padi_openwater.jpeg?alt=media&token=a5584144-8e74-46fd-a228-065f543e3dd3',
        ]);

        // dd($response);
        $response->assertStatus(404);
    }
}
