<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtherpatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otherpatients', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('patient_id')->unsigned();
            $table->string('name');
            $table->string('email',100)->unique()->nullable();
            $table->string('mobile');
            $table->rememberToken();
            $table->foreign('patient_id')->references('id')->on('patients');
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
        Schema::dropIfExists('otherpatients');
    }
}
