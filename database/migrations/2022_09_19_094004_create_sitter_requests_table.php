<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitterRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sitter_requests', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('sitter_id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('address')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('hire_type')->nullable();
            $table->string('payment_period')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('transaction_number')->nullable();
            $table->string('payment_method')->nullable();
            $table->integer('payment_approved_request')->nullable();
            $table->string('amount')->nullable();
            $table->text('comments')->nullable();
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
        Schema::dropIfExists('sitter_requests');
    }
}
