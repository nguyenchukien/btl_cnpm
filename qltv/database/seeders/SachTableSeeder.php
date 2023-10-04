<?php

namespace Database\Seeders;

use App\Models\Sach;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SachTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i = 0; $i < 100; $i++){
            Sach::create([
                'id_sach' => $i + 1,
                'ten_sach' => $faker->sentence(3, true),
                'ten_tacgia' => $faker->sentence(3, true),
                'the_loai' => $faker->sentence(3,true),
                'id_thuthu' => $faker->numberBetween(01, 03),
            ]);
        }
    }
}
