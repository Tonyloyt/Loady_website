3<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentmethodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymentmethod', function (Blueprint $table) {
            $table->id();
            $table->string('card');
            $table->string('month');
            $table->string('year');
            $table->string('cvv');
            $table->string('cardname');
            $table->string('mybilling');
            $table->string('zipcode');
            $table->string('address');
            $table->string('city');
            $table->timestamps();
            $table->string('status');
            $table->string('clientid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paymentmethod');
    }
}
