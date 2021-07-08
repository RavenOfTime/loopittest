<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Vehicles;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $user = new User;
        // $user->email = "test@test.com";
        // $user->password = "test";
        // $user->name = "test";
        // $user->save();

        // vehicle data
        for ($i = 0; $i < 10; $i++) {
            $a = new Vehicles();
            $a->name = "Audi - " . $i;
            $a->price = rand(10000, 100000);
            $a->image = "/img/vehicle/vehicle" . $i . ".jpg";
            $a->save();
            # code...
        }
    }
}
