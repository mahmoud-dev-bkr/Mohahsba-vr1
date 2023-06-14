<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseInvoiceDetails extends Model
{
    protected $fillable = [
        'product_id',
        'purchase_invoice_id',
        'qun',
        'withDescunt',
        'descunt',
        'price_after',
        'price_before',
        'tax',
        'type',
        'tax_value',
    ];
    protected $hidden = [
    'updated_at	','	created_at',
    ];
}
