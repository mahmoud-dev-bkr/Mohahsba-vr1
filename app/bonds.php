<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bonds extends Model
{
    protected $fillable = [
        'reference_number','entity','account','Type','description','date',
    ];
    protected $hidden = [
    '	updated_at	','	created_at',
    ];
}

