<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'SKU'=>$faker->unique()->text(10),
        'category' => $faker->randomElement(['formals' ,'tees', 'casuals']),
        'name'=>$faker->text(15),
        'description'=>$faker->text,
        'attributes'=>['size'=>['S','M','L'], 'color'=>['red', 'green', 'blue']],
        'is_available'=>$faker->boolean(90),
        'quantity'=>$faker->numberBetween(0,200),


    ];
});
