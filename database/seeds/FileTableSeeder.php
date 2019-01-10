<?php

use App\file;
use Illuminate\Database\Seeder;

class FileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        file::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 5; $i++) {
            file::create([
                'username' => $faker->sentence,
                'email' => $faker->paragraph,
                'image' => $faker->paragraph,
                'note' => 'true',
            ]);
        }
    }
}
