<?php

namespace Database\Seeders;

use App\Models\Expedition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpeditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $expeditions = [
            ['company' => 'Go-Jek Instant'],
            ['company' => 'SiCepat Express'],
            ['company' => 'JNT Express'],
            // Add more data if needed


        ];
        Expedition::insert($expeditions);
    }
}
