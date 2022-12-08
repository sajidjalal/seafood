<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterCityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_city', function (Blueprint $table) {
            $table->id();
            $table->integer('city_id')->unique();
            $table->string('city_name', 50);
            $table->integer('state_id');
            $table->integer('zone_id');
            $table->integer('sequence')->default(1);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();

            $table->index(['id', 'city_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_city');
    }
}
