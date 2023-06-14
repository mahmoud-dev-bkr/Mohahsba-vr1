<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class DailyAccountingEntries extends Model
{
    use Notifiable;
    protected $fillable = [
        'Note',
        'date',
        'site_id',
        'Total',
    ];
    protected $hidden = [
    '	updated_at	','	created_at',
    ];
}
