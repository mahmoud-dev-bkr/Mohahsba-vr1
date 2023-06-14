<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = [
        'name','cods','Note','acount',
    
    ];
    protected $hidden = [
    '	updated_at	','	created_at',
    ];
}
