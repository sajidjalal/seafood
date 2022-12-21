<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents_details', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('path', 500)->nullable();
            $table->unsignedInteger('created_by')->default(0);
            $table->timestamps();
            $table->softDeletesTz();

            $table->index(['id', 'created_by']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents_details');
    }
}
