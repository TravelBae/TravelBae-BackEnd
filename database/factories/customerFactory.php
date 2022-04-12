<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\customer>
 */
class customerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_customer'=> $this -> faker -> name($gender = 'male'|'female'),
            'username_customer'=> $this -> faker -> userName(),
            'password_customer'=> $this -> faker -> numberBetween(100, 500),
            'noHP_customer'=> $this -> faker -> phoneNumber(),
            'email'=> $this -> faker -> email(),
            'role_id'=> $this -> faker -> word()
        ];
    }
}
