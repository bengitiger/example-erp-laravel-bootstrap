<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('supplier_id');
            $table->integer('amount');
            $table->float('price_unit', 7, 2);
            $table->timestamp('created_at');
            $table->timestamp('updated_at');

            $table
                ->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');
            $table
                ->foreign('supplier_id')
                ->references('id')
                ->on('suppliers')
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
        Schema::dropIfExists('purchases');
    }
}
