<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_info', function (Blueprint $table) {
            $table->string('uniqueid');
            $table->string('full_name');
            $table->string('campus_addr');
            $table->string('phone_Num');
            $table->string('academicyear');
            $table->string('minors');
            $table->string('majors');
            $table->string('career_type');
            $table->date('grad_date');
            $table->string('citzen');
            $table->string('gpa');
            $table->string('statement');
            $table->string('recieved_scholarship');
            $table->integer('scholarship_id');
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
        Schema::dropIfExists('student_info');
    }
}
