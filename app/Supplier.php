<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name','number1','number2','email1','email2','property_name','web_site','Tex_number','status', 'selling_points'
    ];
    protected $hidden = [
    '	updated_at	','	created_at',
    ];
}
