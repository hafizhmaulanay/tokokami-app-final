<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('code');
            $table->foreignId('users_id')->index('users_id_fk7_idx');
            $table->foreignId('payments_id')->index('payments_id_fk8_idx');
            $table->integer('shipping_price');
            $table->integer('total_price');
            $table->string('transaction_status');
            $table->string('shipping_status');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
