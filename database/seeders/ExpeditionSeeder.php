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
            ['company' => 'Go-Jek Instant', 'delivery_fee' => 10000],
            ['company' => 'SiCepat Express', 'delivery_fee' => 12000],
            ['company' => 'JNT Express', 'delivery_fee' => 15000],
            // Add more data if needed
        ];
        Expedition::insert($expeditions);
    }
}
