<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculties', function (Blueprint $table) {
            $table->integer('faculty_id')->primary();
            $table->string('first_name', 40);
            $table->string('last_name', 40);
            $table->date('birthdate');
            $table->string('gender', 20);
            $table->string('mobile_number', 11);
            $table->string('email_address', 50);
            $table->date('date_entered');
            $table->string('position', 40);
            $table->string('department', 40);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faculties');
    }
}
