<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('dept_id')->unsigned();
            $table->string('name');
            $table->string('Designation')->nullable();
            $table->string('Specialty')->nullable();
            $table->string('Gender');
            $table->string('image')->nullable();
            $table->string('Mobile')->nullable();
            $table->string('email',100)->unique();
            $table->string('password');
            $table->string('bmdc')->nullable();
            $table->string('Description',150)->nullable();
            $table->string('Degree')->nullable();
            $table->string('Addreess')->nullable();
            $table->float('free');
            $table->string('time');
            $table->rememberToken();
            $table->foreign('dept_id')->references('id')->on('departments');
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
        Schema::dropIfExists('doctors');
    }
}
