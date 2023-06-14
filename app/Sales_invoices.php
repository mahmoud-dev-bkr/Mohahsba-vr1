<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales_invoices extends Model
{
    protected $fillable = [
        'Ref','client_id','Release_Date','Payment_Terms','description','due_date','Supply_date','code'
    ];
    protected $hidden = [
    '	updated_at	','	created_at',
    ];

}
