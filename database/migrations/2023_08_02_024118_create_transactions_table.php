<?php
// database/migrations/xxxx_xx_xx_create_transactions_table.php

use App\Models\Expedition;
use App\Models\Payment;
use App\Models\PayStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('cust_name');
            $table->json('cart');
            $table->decimal('total_transaction', 10, 2);
            $table->string('payment_method');
            $table->unsignedBigInteger('payments_id'); // Change data type to unsignedBigInteger
            $table->foreign('payments_id')->references('id')->on('payments'); // Make sure the referenced primary key is 'id'
            $table->string('address');
            $table->string('coordinate');
            $table->unsignedBigInteger('expeditions_id'); // Change data type to unsignedBigInteger
            $table->foreign('expeditions_id')->references('id')->on('expeditions'); // Make sure the referenced primary key is 'id'
            $table->unsignedBigInteger('pay_statuses_id'); // Change data type to unsignedBigInteger
            $table->foreign('pay_statuses_id')->references('id')->on('pay_statuses'); // Make sure the referenced primary key is 'id'
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
