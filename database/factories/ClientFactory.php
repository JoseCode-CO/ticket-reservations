<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Client::class;
    public function definition()
    {
        return [
            'name'=> $this->faker->name,
            'lastname'  =>  $this->faker->lastname,
            'telephone'  =>  $this->faker->e164PhoneNumber,
            'direction'  =>  $this->faker->text,
            'identy_document'  =>  $this->faker->ean8,
            'email'  =>  $this->faker->email
        ];
    }
}
