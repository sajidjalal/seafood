<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategoriesModel extends Model
{
    use SoftDeletes;
    protected $table = 'product_categories';
    protected $guarded = [];
}
