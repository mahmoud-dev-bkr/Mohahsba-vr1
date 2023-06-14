<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $fillable = [
        'name_ar','name_en','Inventory_id',
    ];
    protected $hidden = [
    '	updated_at	','	created_at',
    ];
}
