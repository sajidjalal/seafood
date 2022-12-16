<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_log', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id')->unsigned()->nullable();
            $table->string('email_to', 50)->nullable();
            $table->string('template_name', 50)->nullable();
            $table->string('subject', 250)->nullable();
            $table->longText('data');
            $table->tinyInteger('status')->default(0)->nullable();
            $table->string('remark', 50)->nullable();
            $table->dateTime('sent_at')->nullable();

            $table->unsignedInteger('created_by')->default(0);
            $table->timestamps();

            $table->index('id', 'user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mail_log');
    }
}
