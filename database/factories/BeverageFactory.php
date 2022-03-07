<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


    $factory->define(App\Beverage::class, function(Faker $faker)
    {

        return [
            'name' => $faker->word(),
            'type' => 'Softdrink'

        ];
    });