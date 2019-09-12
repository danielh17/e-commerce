<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
      'name' => $faker->randomElement([
      'Tecnología',
      'Bebidas',
      'Autos',
      'Coding Scholl',
      'Indumentaria',
      'Alimentos',
      'Ropa deportiva',
      'Hogar',
      'Jardín',
      ])
    ];
});
