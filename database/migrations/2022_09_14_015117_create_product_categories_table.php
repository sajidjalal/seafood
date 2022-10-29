<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->string('name')->nullable();
            $table->string('scientific_name')->nullable();
            $table->string('forms')->nullable();
            $table->string('price')->nullable();
            $table->string('origin')->nullable();
            $table->string('features')->nullable();
            $table->string('order_size')->nullable();
            $table->string('packing')->nullable();
            $table->longText('description')->nullable();
            $table->string('path', 500);
            $table->boolean('status')->default(1);
            $table->unsignedInteger('created_by')->default(0);
            $table->unsignedInteger('updated_by')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_categories');
    }
}
