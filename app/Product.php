<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $fillable = [
        'name_ar', 'name_en',
        'id_unit','id_des',
        'type','barCode',
        'price_of_sell',
        'serial_number','Tex_Number',
         'is_sell', 'is_buy',
         'is_store', 'Note', 'buy', 'sel','account_buy','account_sel'
    ];
    protected $hidden = [
    'updated_at	','	created_at',
    ];
}
