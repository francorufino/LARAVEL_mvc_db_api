<?php

use Faker\Generator as Faker;

$factory->define(App\Marca::class, function (Faker $faker) {
    return [
        // 'nome'=> $faker->name,
        'nome'=> $faker->company,

        'site'=> $faker->url,
        'logo'=> $faker->imageURL($width = 640, $height= 480)
    ];
});
