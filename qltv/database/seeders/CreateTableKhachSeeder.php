<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Khach;
class CreateTableKhachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i = 0; $i < 100; $i++){
            Khach::create([
                'id_khach' => $i + 1,
                'ten_khach' => $faker->name,
                'gioi_tinh' => $faker->randomElement(['nam','nu']),
                'namsinh' => $faker->numberBetween(1000, 5000),
                'diachi' => $faker->address,
                'sdt' => $faker->sentence(3, true),
            ]);
        }
    }
}
