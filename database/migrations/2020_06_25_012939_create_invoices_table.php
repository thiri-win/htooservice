<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->string('client')->nullable();
            $table->string('car_make');
            $table->string('car_no');
            $table->string('car_model');
            $table->string('phone')->nullable();
            $table->integer('sub_total');
            $table->integer('advanced')->default(0);
            $table->integer('discount')->default(0);
            $table->integer('grand_total');
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
        Schema::dropIfExists('invoices');
    }
}
