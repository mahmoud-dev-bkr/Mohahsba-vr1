<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientbond extends Model
{
    protected $table = "client_bonds";
    protected $fillable = [
        'code', 'id_customers','Date','id_Account','type','Note','Amount'
     ];
     protected $hidden = [
     'updated_at	','	created_at',
     ];
}
