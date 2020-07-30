<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_notices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('title_slug');
            $table->text('description');
            $table->bigInteger('academic_session_id');
            $table->bigInteger('department_id');
            $table->bigInteger('course_name_id');
            $table->bigInteger('faculty_id');
            $table->bigInteger('notice_type_id');
            $table->string('notice_image');
            $table->tinyInteger('status');
            $table->dateTime('notice_date');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
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
        Schema::dropIfExists('academic_notices');
    }
}
