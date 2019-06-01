<?php

use App\Enums\AddressType;
use App\Models\Address;
use App\Models\User;
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
        factory(Address::class, 10)->create();
        factory(User::class, 10)->create()->each(function ($user) {

            //get random address and assign to user
            $address = Address::inRandomOrder()->first();

            $user->addresses()->attach($address->id);

            $_addr = $user->addresses()->where('address_id', $address->id)->first();
            $_addr->pivot->type = AddressType::getRandomValue();
            $_addr->pivot->save();
        });
    }
}
