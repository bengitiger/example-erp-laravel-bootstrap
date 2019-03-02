<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->uuid('id')->unique();
            $table->uuid('company_id');
            $table->string('address');
            $table->string('phone');
            $table->boolean('home');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');

            $table->primary('id');

            $table
                ->foreign('company_id')
                ->references('id')
                ->on('companies')
                ->onDelete('cascade');
        });

        DB::statement('ALTER TABLE stores ALTER COLUMN id SET DEFAULT uuid_generate_v4();');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
