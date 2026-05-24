<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStakesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stakes', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('package_name');
            $table->string('currency');
            $table->string('coin_in');
            $table->string('coin_out');
            $table->double('min');
            $table->double('max');
            $table->double('daily_interest');
            $table->integer('period');
            $table->integer('days_interval');
            $table->double('withdrwal_fee');
            $table->double('ref_bonus');
            $table->integer('status');
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
        Schema::dropIfExists('stakes');
    }
}
