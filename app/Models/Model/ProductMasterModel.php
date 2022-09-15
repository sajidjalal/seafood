<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductMasterModel extends Model
{
    use SoftDeletes;
    protected $table = 'product_master';
    protected $guarded = [];
}
