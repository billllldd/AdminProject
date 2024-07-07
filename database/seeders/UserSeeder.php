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
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@localhost',
            'password' => bcrypt('password'),
        ]);
        $admin->assignRole('admin');

        $penulis = User::create([
            'name' => 'penulis',
            'email' => 'penulis@localhost',
            'password' => bcrypt('password'),
        ]);
        $penulis->assignRole('penulis');
    }
}
