<?php

// database/migrations/xxxx_xx_xx_create_pay_statuses_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayStatusesTable extends Migration
{
    public function up()
    {
        Schema::create('pay_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pay_statuses');
    }
}
