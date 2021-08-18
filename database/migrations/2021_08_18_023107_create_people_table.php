<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 50);
            $table->string('second_name', 50);
            $table->string('first_surname', 50);
            $table->string('second_surname', 50);
            $table->string('ci', 15)->unique();
            $table->string('email', 100);
            $table->text('address');
            $table->string('phone', 15)->nullable();
            $table->string('cellphone', 15);
            $table->string('photo', 100)->nullable();
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
        Schema::dropIfExists('people');
    }
}
