<?php
// database/seeders/PayStatusSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PayStatus;

class PayStatusSeeder extends Seeder
{
    public function run()
    {
        $statuses = [
            ['status' => 'Paid'],
            ['status' => 'Unpaid'],
            ['status' => 'Pending'],
            // Add more data as needed
        ];

        foreach ($statuses as $status) {
            PayStatus::create($status);
        }
    }
}
