<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'role_id'   => 1,
            'id_number' => '1111111111',
            'name'      => 'Administrator',
            'email'     => 'admin1@admin.com',
            'password'  => bcrypt('ursb123password'),
        ]);

        User::create([
            'role_id'   => 2,
            'id_number' => '2222222222',
            'name'      => 'Instructor',
            'email'     => 'admin2@admin.com',
            'password'  => bcrypt('ursb123password'),
        ]);

        User::create([
            'role_id'   => 3,
            'id_number' => '3333333333',
            'name'      => 'Jan Lawrence Madali',
            'email'     => 'admin3@admin.com',
            'password'  => bcrypt('ursb123password'),
        ]);
    }
}
