<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name','description'
    ];
    protected $hidden = [
    '	updated_at	','	created_at',
    ];
}
