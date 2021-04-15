<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDebitmastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debitmasters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('endt_renewal_no',19)->nullable();
            $table->string('policy_no',19)->nullable();
            $table->float('gross_amount')->nullable();
            $table->string('phone_no')->nullable();
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
        Schema::dropIfExists('debitmasters');
    }
}
