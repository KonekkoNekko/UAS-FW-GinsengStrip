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
        //
        User::create([
            'name' => 'Nabiel Setiawan',
            'email' => 'biel@awan',
            'password' => bcrypt('bielawan'),
            'phone' => '081256789012',
            'type' => 0,
        ]);
        User::create([
            'name' => 'Kevin Huditara',
            'email' => 'pin@ken',
            'password' => bcrypt('pinseng'),
            'phone' => '085601234567',
            'type' => 0,
        ]);
        User::create([
            'name' => 'Admin Pertama',
            'email' => 'admin@admin',
            'password' => bcrypt('adminadmin'),
            'phone' => '',
            'type' => 1,
        ]);
    }
}
