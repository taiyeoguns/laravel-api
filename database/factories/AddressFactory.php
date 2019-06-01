<?php

use App\Models\Address;
use Faker\Generator as Faker;
use Ramsey\Uuid\Uuid;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'uuid'  => Uuid::uuid4()->toString(),
        'text' => $faker->address
    ];
});
