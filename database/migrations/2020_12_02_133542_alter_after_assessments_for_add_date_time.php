<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterAfterAssessmentsForAddDateTime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('after_assessments', function (Blueprint $table) {
            $table->string('vehicle_number')->nullable();
            $table->string('date');
            $table->string('time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('after_assessments', function (Blueprint $table) {
            //
        });
    }
}
