<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = factory(App\Category::class)->times(5)->create();
        $interests = factory(App\Interest::class)->times(5)->create();
        $products = factory(App\Product::class)->times(10)->create();

        foreach ($products as $oneProduct) {
          $oneProduct->category()->attach($categories->random(3));
        }

        foreach ($interests as $oneInterest) {
          $oneInterest->category()->attach($categories->random(2));
        }
    }
}
