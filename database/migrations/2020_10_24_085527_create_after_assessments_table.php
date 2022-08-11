<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAfterAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('after_assessments', function (Blueprint $table) {
            $table->id();
            $table->string('driver_name');
            $table->string('driver_mobile');
            $table->string('supplier_of_goods')->nullable();
            $table->text('description_of_freight')->nullable();
            $table->string('countries')->nullable();
            $table->string('freight_company');
            $table->string('taste_and_smell');
            $table->string('close_contact');
            $table->string('diagnosed_with_Covid');
            $table->string('own_vehicle');
            $table->string('passenger_name')->nullable();
            $table->string('passenger_contact')->nullable();
            $table->string('signature');
            $table->boolean('check_temp')->default(1);
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
        Schema::dropIfExists('after_assessments');
    }
}
