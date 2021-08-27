<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePitomnik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pitomnik', function (Blueprint $table) {
            $table->id();
            $table->text('nik');
            $table->integer('years');
            $table->enum('type', ['dog','cat','tortoise']);
            $table->enum('is_give', [0,1])->default(0);
            $table->dateTime('add_animal');
            $table->dateTime('give_animal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_pitomnik');
    }
}
