<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookNowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_nows', function (Blueprint $table) {
            $table ->increments('id');
            $table ->string('name');
            $table ->string('email');
            $table ->string('phone');
            $table ->string('city');
            $table ->string('rooms');
            $table ->string('checkIn');
            $table ->string('checkOut');
            $table ->string('adults');
            $table ->string('children');
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
        Schema::dropIfExists('book_nows');
    }
}
