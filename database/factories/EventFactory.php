<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_event'=> $this->faker->name,
            'description'  =>  $this->faker->text,
            'category'  =>  $this->faker->word,
            'unit_price'  =>  $this->faker->buildingNumber ,
            'number_tickets'  =>  $this->faker->buildingNumber,
        ];
    }
}
