<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    protected $fillable = [
        'journal_id', 
        'type', 
        'acount_from', 
        'acount_to', 
         
    ];
    protected $hidden = [
    'updated_at	','	created_at',
    ];
}
