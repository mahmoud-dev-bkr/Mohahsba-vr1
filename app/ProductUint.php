<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductUint extends Model
{
    protected $fillable = [
        'id_unit','price_buy','is_buy_tex','price_sell','is_sell_text','barcode', 'id_product'
    ];

}
