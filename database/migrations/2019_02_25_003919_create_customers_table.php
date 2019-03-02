<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->uuid('id')->unique();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('cellphone');
            $table->string('address');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');

            $table->primary('id');
        });

        DB::statement('ALTER TABLE customers ALTER COLUMN id SET DEFAULT uuid_generate_v4();');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
