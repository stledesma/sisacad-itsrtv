<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicPeriodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic__periods', function (Blueprint $table) {
            $table->id();
            $table->string('period_name', 50)->unique();
            $table->integer('period_number');
            $table->date('period_star_date');
            $table->date('period_end_date');
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
        Schema::dropIfExists('academic__periods');
    }
}
