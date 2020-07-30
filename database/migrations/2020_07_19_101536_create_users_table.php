<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->bigInteger('role_id')->default(2);
            $table->string('telephone')->unique();
            $table->bigInteger('faculty_id');
            $table->bigInteger('academic_session_id');
            $table->bigInteger('course_name_id');
            $table->bigInteger('department_id');
            $table->string('profile_image');
            $table->tinyInteger('email_verified');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('email_verified_token')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
