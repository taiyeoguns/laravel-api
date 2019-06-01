<?php

use Faker\Generator as Faker;
use Ramsey\Uuid\Uuid;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'first_name' => $fn = $faker->firstName,
        'last_name' => $ln = $faker->lastName,
        'uuid'  => Uuid::uuid4()->toString(),
        'email' => strtolower(sprintf('%s.%s@laravelapi.local', $fn, $ln)),
        'phone' => $faker->phoneNumber,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
