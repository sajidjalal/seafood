<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterStateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_state', function (Blueprint $table) {
            $table->id();
            $table->integer('state_id')->unique();
            $table->string('state_name', 50);
            $table->string('state_code', 50);
            $table->integer('sequence')->default(1);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();

            $table->index(['id', 'state_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_state');
    }
}
