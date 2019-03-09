<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('designation')->nullable();
            $table->string('specialty')->nullable();
            $table->string('gender');
            $table->string('mobile')->nullable();
            $table->float('free');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('image')->nullable();
            $table->string('bmdc')->nullable();
            $table->string('degree')->nullable();
            $table->string('address')->nullable();
            $table->string('description')->nullable();
            $table->string('email',100)->unique();
            $table->string('password');
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
        Schema::dropIfExists('reg_doctors');
    }
}
