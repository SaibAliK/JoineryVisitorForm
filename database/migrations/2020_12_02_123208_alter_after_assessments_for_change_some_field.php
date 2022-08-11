<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterAfterAssessmentsForChangeSomeField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('after_assessments', function (Blueprint $table) {
            $table->dropColumn('supplier_of_goods');
            $table->dropColumn('description_of_freight');
            $table->dropColumn('own_vehicle');
            $table->dropColumn('passenger_name');
            $table->dropColumn('passenger_contact');
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
            
        });
    }
}
