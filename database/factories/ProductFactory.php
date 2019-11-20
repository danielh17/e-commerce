<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

  $filePath = storage_path('app/public/products');

    return [
      'name' => $faker->unique()->randomElement([
      'Entradas para la película de Messi',
      'Entradas para Tomorrowland',
      'Pelota total 90',
      'Clase de vuelo',
      'Iphone X',
      'Día de spa',
      'Set de vajilla',
      'MacBook Pro',
      'Sillón de Chenil',
      'Camisa',
      'Set de herramientas'
    ]),
      'price' => $faker->randomFloat(2, 100, 999999),
      'description' => $faker->sentence(5, true),
      'image' => $faker->image($filePath, 400, 300, null, false)
    ];
});
