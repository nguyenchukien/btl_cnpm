<?php

namespace Database\Seeders;

use App\Models\Khach;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class KhachTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            Khach::create([
                'id_khach' => $i + 1,
                'ten_khach' => $faker->name,
                'gioi_tinh' => $faker->randomElement(['nam', 'nu']),
                'namsinh' => $faker->numberBetween(1800, 2015),
                'diachi' => $faker->address,
                'sdt' => $faker->randomElement(['09284276532', '0925848382','0925201329'])
            ]);
        }
    }
}
