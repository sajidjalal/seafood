<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailLogModel extends Model
{
    protected $table = 'email_log';
    protected $guarded = [];


    public function document_details()
    {
        return $this->belongsTo('App\Models\DocumentsDetailsModel', 'documents_id', 'id');
    }

}
