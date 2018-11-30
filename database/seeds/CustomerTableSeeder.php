<?php

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Customer::truncate();

        $faker = \Faker\Factory::create();


        for ($i = 0; $i < 50; $i++) {
            \App\Customer::create([
                'first_name' => $faker->name,
                'last_name' => $faker->firstName,
            ]);
        }

    }
}
