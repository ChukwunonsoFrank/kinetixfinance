<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Investment extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'hash',
        'type',
        'amount',
        'confirmation_status',
        'running_balance',
        'total_profit',
        'daily_profit',
        'roi',
        'duration',
        'matured',
        'paid',
        'maturity_date'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
