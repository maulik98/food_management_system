<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FoodDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('food_details',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('donor_address');
            $table->string('food_quant');
            $table->string('status');
            $table->integer('donated_by')->unsigned();
            $table->foreign('donated_by')->references('id')->on('users');            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
