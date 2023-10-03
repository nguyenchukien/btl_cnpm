<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list_users = [
            [
                'name' =>"admin",
                'email' => "admin@gmail.com",
                'password' => Hash::make("admin"),
            ],
            [
                'name' =>"kien",
                'email' => "kien000@gmail.com",
                'password' => Hash::make("250702"),
            ],
        ];

        DB::table('users')->delete(); //xóa tat ca bn ghi hien co trong bang

        foreach ($list_users as $user) {
            User::insert($user);
        }
    }
}
