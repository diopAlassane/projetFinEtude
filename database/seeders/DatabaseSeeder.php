<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $faker = Faker::create();
    	foreach (range(1,10) as $index) {
            DB::table('pelerins')->insert([
                'prenom' => $faker->prenom,
                'nom' => $faker->nom,
                'contact' => $faker->contact,
                'date_nais' => $faker->date($format = 'D-m-y', $max = '2020',$min = '1900')
            ]);
        }
    }
}
