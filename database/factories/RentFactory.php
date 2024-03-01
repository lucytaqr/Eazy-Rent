<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rent>
 */
class RentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // faker region indonesia
        $faker = \Faker\Factory::create('id_ID');
        $destinationPath = 'public/image/rent';
        $profilImage = date('YmdHis') . "." . $faker->image($destinationPath, 640, 480, null, false);

        return [
            //   'name', 'deskripsi', 'image', 'price'
            'name' => $faker->name,
            'deskripsi' => $faker->text,
            'image' => $profilImage,
            'price' => $faker->numberBetween(100000, 1000000),
        ];
    }
}
