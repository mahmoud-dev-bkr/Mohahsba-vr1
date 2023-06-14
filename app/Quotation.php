<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    protected $fillable = [
        'Ref','client_id','Release_Date','Payment_Terms','description','due_date','Supply_date',
    ];
    protected $hidden = [
    '	updated_at	','	created_at',
    ];
}
