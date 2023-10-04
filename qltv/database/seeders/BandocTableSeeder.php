<?php

namespace Database\Seeders;

use App\Models\Bandoc;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BandocTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            Bandoc::create([

                'tenban_doc' => $faker->name,
                'gioi_tinh' => $faker->randomElement(['Nam', 'Nữ']),
                'nam_sinh' => $faker->numberBetween(1930, 2022),
                'dia_chi' => $faker->address,
                'sdt' => $faker->randomElement(['09284276532', '0925848382','0925201329','0924582372','0325252385','0358139254']),
                'id_thuthu' => $faker->numberBetween(01, 03),
            ]);
        }
    }
}
