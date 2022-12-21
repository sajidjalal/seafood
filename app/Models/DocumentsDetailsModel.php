<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentsDetailsModel extends Model
{
    use SoftDeletes;
    protected $table = 'documents_details';
    protected $guarded = [];
    
}
