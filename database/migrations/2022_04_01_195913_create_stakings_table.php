<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStakingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stakings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->string('usn');
            $table->string('package');
            $table->integer('package_id');
            $table->string('currency');
            $table->string('capital');
            $table->string('i_return');
            $table->string('date_invested');
            $table->string('end_date');
            $table->string('period');
            $table->string('days_interval');
            $table->double('interest');
            $table->string('last_wd');
            $table->string('next_w_date');
            $table->string('status');
            $table->string('img');
            $table->string('hash');
            $table->double('w_amt');
            $table->integer('daily');
            $table->timestamp('date');
            $table->string('mode');
            $table->string('s_date');
            $table->integer('reinv');
            $table->integer('state');
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
        Schema::dropIfExists('stakings');
    }
}
