<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Account extends Model
{
    use Notifiable;
    protected $table = "accounts";
    protected $fillable = [
        'code', 'amount','Note','name', 'type', 'parent_id', 'count_child', 'transactions', 'level', 'non_editable'
    ];
    protected $hidden = [
    '	updated_at	','	created_at',
    ];
    
    public static function tree()
    {
        $allAccounts = Account::get();

        $rootAccounts = $allAccounts->where('parent_id', 0);

        self::formatTree($rootAccounts, $allAccounts);

        return $rootAccounts;
    }

    private static function formatTree($Accounts, $allAccounts)
    {
        foreach ($Accounts as $Account) {
            $Account->children = $allAccounts->where('parent_id', $Account->id)->values();

            if ($Account->children->isNotEmpty()) {
                self::formatTree($Account->children, $allAccounts);
            }
        }
    }

}
