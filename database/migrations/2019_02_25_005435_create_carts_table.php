<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->uuid('id')->unique();
            $table->uuid('employee_id');
            $table->uuid('sale_id');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');

            $table->primary('id');

            $table
                ->foreign('employee_id')
                ->references('id')
                ->on('employees')
                ->onDelete('cascade');
            $table
                ->foreign('sale_id')
                ->references('id')
                ->on('sales')
                ->onDelete('cascade');
        });

        DB::statement('ALTER TABLE carts ALTER COLUMN id SET DEFAULT uuid_generate_v4();');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
