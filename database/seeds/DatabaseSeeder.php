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
        $faker = Faker\Factory::create();
        for($i = 0; $i < 2000; $i++) {
            DB::table('votingkey')->insert([
                'key' => $faker->unique()->userName
            ]);
        }
    }
}
