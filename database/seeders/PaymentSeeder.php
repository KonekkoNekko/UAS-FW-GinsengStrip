<?php

// database/seeders/PaymentSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Payment;

class PaymentSeeder extends Seeder
{
    public function run()
    {
        $payments = [
            ['code' => 'BCA', 'bank' => 'Bank Central Asia', 'account_num' => '1234567890'],
            ['code' => 'BRI', 'bank' => 'Bank Rakyat Indonesia', 'account_num' => '9876543210'],
            ['code' => 'Mandiri', 'bank' => 'Bank Mandiri', 'account_num' => '5678901234'],
            // Add more data as needed
        ];

        foreach ($payments as $payment) {
            Payment::create($payment);
        }
    }
}

