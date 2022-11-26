<?php

use Facade\Ignition\Tabs\Tab;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterPincodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_pincode', function (Blueprint $table) {
            $table->id();
            $table->integer('pincode')->unique();
            $table->string('country_code', 7)->nullable();
            $table->integer('state_id');
            $table->integer('city_id');
            $table->string('area', 50)->nullable();
            $table->string('latitude', 50)->nullable();
            $table->string('longitude', 50)->nullable();
            $table->integer('sequence')->default(1);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();

            $table->index(['id', 'pincode']);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_pincode');
    }
}
