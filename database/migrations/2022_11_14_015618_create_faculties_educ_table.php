<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultiesEducTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculties_educ', function (Blueprint $table) {
            $table->integer('faculty_id')->primary();
            $table->boolean('has_unders');
            $table->string('unders_enrolled', 50)->nullable();
            $table->year('unders_year_received')->nullable();
            $table->boolean('has_masters');
            $table->string('masters_enrolled', 50)->nullable();
            $table->year('masters_year_received')->nullable();
            $table->boolean('has_doctors');
            $table->string('doctors_enrolled', 50)->nullable();
            $table->year('doctors_year_received')->nullable();
            $table->integer('academe_points');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faculties_educ');
    }
}
