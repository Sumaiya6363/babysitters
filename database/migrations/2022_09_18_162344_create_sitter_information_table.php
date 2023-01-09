<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitterInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sitter_information', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('image')->nullable();
            $table->integer('home_district')->nullable();
            $table->integer('current_district')->nullable();
            $table->string('nid_no')->nullable();
            $table->string('nid_front')->nullable();
            $table->string('nid_back')->nullable();
            $table->string('self_cv')->nullable();
            $table->string('guardian_name')->nullable();
            $table->string('guardian_mobile')->nullable();
            $table->string('guardian_email')->nullable();
            $table->string('guardian_photo')->nullable();
            $table->string('guardian_nid_no')->nullable();
            $table->string('guardian_nid_front')->nullable();
            $table->string('guardian_nid_back')->nullable();
            $table->string('guardian_relationshp')->nullable();
            $table->string('degree_name')->nullable();
            $table->string('degree_institute')->nullable();
            $table->string('degree_group')->nullable();
            $table->string('passing_year')->nullable();
            $table->string('available_time')->nullable();
            $table->string('expected_salary')->nullable();
            $table->string('approved_salary')->nullable();
            $table->string('user_salary')->nullable();
            $table->tinyInteger('status')->default(2);
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
        Schema::dropIfExists('sitter_information');
    }
}
