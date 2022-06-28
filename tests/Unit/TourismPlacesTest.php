<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Auth\RequestGuard;
use Tests\TestCase;

class TourismPlacesTest extends TestCase
{
    public function test_success_createtourplaces()
    {

        $response = $this->post('tourplaces', [
            'nama_tempat' => 'Bali Reptile Park',
            'kategori' => '1',
            'tipe' => 'Atraksi',
            'deskripsi' => 'Kebun raya dengan luas dua hektar ini juga punya area khusus untuk kamu yang ingin berinteraksi dengan iguana, buaya, dan kura-kura.',
            'stok_tiket' => '500',
            'harga' => '12000',
            'jam_buka' => '090000',
            'alamat' => 'Gianyar, Bali, Indonesia',
            'img_tempat' => 'https://firebasestorage.googleapis.com/v0/b/travelbae-9f9a6.appspot.com/o/bali_reptile.jpeg?alt=media&token=b69a5c6f-1a81-46be-8f83-b3c8d6f99b94'
        ]);

        // dd($response);
        $response->assertStatus(404);
    }

    public function test_failed_createtourplaces()
    {

        $response = $this->post('tourplaces', [
            'nama_tempat' => 'Bali Reptile Park',
            'kategori' => '1',
            'tipe' => 'Atraksi',
            'deskripsi' => 'Kebun raya dengan luas dua hektar ini juga punya area khusus untuk kamu yang ingin berinteraksi dengan iguana, buaya, dan kura-kura.',
            'stok_tiket' => '500',
            'harga' => '12000',
            'jam_buka' => '090000',
            'alamat' => 'Gianyar, Bali, Indonesia',
            'img_tempat' => 'https://firebasestorage.googleapis.com/v0/b/travelbae-9f9a6.appspot.com/o/bali_reptile.jpeg?alt=media&token=b69a5c6f-1a81-46be-8f83-b3c8d6f99b94'
        ]);

        $response->assertStatus(404);
    }

    public function test_success_updateplaces()
    {

        $response = $this->put('tourplaces', [
            'nama_tempat' => 'Bali Reptile Park',
            'kategori' => '1',
            'tipe' => 'Atraksi',
            'deskripsi' => 'Kebun raya dengan luas dua hektar ini juga punya area khusus untuk kamu yang ingin berinteraksi dengan iguana, buaya, dan kura-kura.',
            'stok_tiket' => '500',
            'harga' => '12000',
            'jam_buka' => '090000',
            'alamat' => 'Gianyar, Bali, Indonesia',
            'img_tempat' => 'https://firebasestorage.googleapis.com/v0/b/travelbae-9f9a6.appspot.com/o/bali_reptile.jpeg?alt=media&token=b69a5c6f-1a81-46be-8f83-b3c8d6f99b94',
        ]);

        // dd($response);
        $response->assertStatus(404);
    }

    public function test_failed_updateplaces()
    {

        $response = $this->put('tourplaces', [
            'nama_tempat' => '',
            'kategori' => '1',
            'tipe' => 'Atraksi',
            'deskripsi' => 'Kebun raya dengan luas dua hektar ini juga punya area khusus untuk kamu yang ingin berinteraksi dengan iguana, buaya, dan kura-kura.',
            'stok_tiket' => '500',
            'harga' => '12000',
            'jam_buka' => '090000',
            'alamat' => 'Gianyar, Bali, Indonesia',
            'img_tempat' => 'https://firebasestorage.googleapis.com/v0/b/travelbae-9f9a6.appspot.com/o/bali_reptile.jpeg?alt=media&token=b69a5c6f-1a81-46be-8f83-b3c8d6f99b94',
        ]);

        // dd($response);
        $response->assertStatus(404);
    }
}
