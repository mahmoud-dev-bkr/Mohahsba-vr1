<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class advance extends Model
{
    protected $fillable = [
        'Reference','functionary','Value','genre','Date','description',
    ];
    protected $hidden = [
    '	updated_at	','	created_at',
    ];

}
