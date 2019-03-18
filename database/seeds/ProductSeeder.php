<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Product::create([
            'name' => "Ireland's Eye Tour - Adult",
            'img' => 'images/defalut1',
            'price' => 15,
            'description' => 'Irelands Eye Adult Fare'
        ]);
        \App\Product::create([
            'name' => "Ireland's Eye Tour - Child",
            'img' => 'images/defalut1',
            'price' => 10,
            'description' => 'Irelands Eye Child Fare'
        ]);
        \App\Product::create([
            'name' => "Ireland's Eye Tour - Family(1)",
            'img' => 'images/defalut1',
            'price' => 40,
            'description' => 'Irelands Eye Family (2 Adults, 2 Children)'
        ]);
        \App\Product::create([
            'name' => "Ireland's Eye Tour - Family(2)",
            'img' => 'images/defalut1',
            'price' => 50,
            'description' => 'Irelands Eye Family (2 Adults, 3 Children)'
        ]);

        \App\Product::create([
            'name' => 'Howth Cliffs Cruise',
            'img' => 'images/defalut2',
            'price' => 25,
            'description' => 'Single Fare Cliffs Cruise'
        ]);
        \App\Product::create([
            'name' => 'Fishing Trip Half Day',
            'img' => 'images/defalut3',
            'price' => 300,
            'description' => 'Fishing Tip - Half Day'
        ]);
        \App\Product::create([
            'name' => 'Fishing Trip Full Day',
            'img' => 'images/defalut3',
            'price' => 500,
            'description' => 'Fishing Tip - Full Day'
        ]);

        // factory(App\Product::class, 10)->create();
    }
}
