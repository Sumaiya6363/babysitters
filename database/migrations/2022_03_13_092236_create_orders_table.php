<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('orderuid');
            $table->integer('user_id');
            $table->integer('billing_id');
            $table->double('subtotal',10,2);
            $table->string('coupon');
            $table->double('discount',10,2);
            $table->double('vat',10,2);
            $table->double('shipping',10,2);
            $table->double('total',10,2);
            $table->integer('payment_status');
            $table->integer('status');
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
        Schema::dropIfExists('orders');
    }
}
