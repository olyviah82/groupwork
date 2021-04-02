<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->string('first_name', 50);
            $table->string('second_name', 50)->nullable();
            $table->string('cell_phone', 50)->nullable();
            $table->string('homecity', 50)->nullable();
            $table->string('speciality', 50)->nullable();
            $table->string('phone', 50)->nullable();
            $table->string('coments', 500)->nullable();
            $table->integer('age');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}