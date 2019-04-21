<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTableMessages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('message')->nullable(false);
            $table->unsignedInteger('from_doctor')->nullable(false);
            $table->unsignedInteger('to_doctor')->nullable(false);
            $table->timestamps();

            $table->foreign('from_doctor')->references('id')->on('users');
            $table->foreign('to_doctor')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('messages');
    }
}
