<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->unsignedInteger('cart_id');
            $table->unsignedInteger('customer_id');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');

            $table
                ->foreign('cart_id')
                ->references('id')
                ->on('carts')
                ->onDelete('cascade');
            $table
                ->foreign('customer_id')
                ->references('id')
                ->on('customers')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deliveries');
    }
}
