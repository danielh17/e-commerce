<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Interest;
use Faker\Generator as Faker;

$factory->define(Interest::class, function (Faker $faker) {
    return [
      'name' => $faker->randomElement([
      'Celulares',
      'Fútbol',
      'Carreras',
      'Programación',
      'Moda',
      'Asado',
      'Estética',
      'Diseño',
      'Decoración',
      'Espectaculos en vivo',
      'Música electrónica'
      ])
    ];
});
