<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterEmailLogAddAttachmentIdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!(Schema::hasColumn('email_log', 'documents_id'))) {
            Schema::table('email_log', function (Blueprint $table) {
                $table->bigInteger('documents_id')->nullable()->after('template_name');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (!(Schema::hasColumn('email_log', 'documents_id'))) {
            Schema::table('lead_generator', function (Blueprint $table) {
                $table->dropColumn('documents_id');
            });
        }
    }
}
