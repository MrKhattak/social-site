<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->integer("country")->nullable();
            $table->string("city")->nullable();
            $table->string("hometown")->nullable();
            $table->string("work_title")->nullable();
            $table->string("work_place")->nullable();
            $table->string("work_url")->nullable();
            $table->string("edu_major")->nullable();
            $table->string("edu_school")->nullable();
            $table->string("edu_class")->nullable();
            $table->date("dob")->nullable();
            $table->string("facebook")->nullable();
            $table->string("twitter")->nullable();
            $table->string("phone")->nullable();
            $table->string("is_completed")->default(false);
            $table->string("startup_skip")->default(false);
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
        Schema::dropIfExists('profiles');
    }
}
