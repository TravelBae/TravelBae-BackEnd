<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tour_place>
 */
class tour_placeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_tempat'=> $this -> faker -> word(),
            'tipe'=> $this -> faker -> word(),
            'deskripsi'=> $this -> faker -> sentence(),
            'stok_tiket'=> $this -> faker -> numberBetween(20, 1000),
            'harga'=> $this -> faker -> numberBetween(50000, 500000),
            'jam_buka'=> $this -> faker -> time('H:i'),
            'alamat'=> $this -> faker -> streetAddress(),
            'img_tempat'=> $this -> faker -> imageUrl(640, 480, 'animals', true)
        ];
    }
}
