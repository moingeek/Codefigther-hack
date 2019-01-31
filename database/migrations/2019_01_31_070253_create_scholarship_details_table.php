<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScholarshipDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholarship_details', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('name_scholarship');
            $table->longText('eligibilty');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('status');
            $table->string('scholarship_under');
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
        Schema::dropIfExists('scholarship_details');
    }
}
