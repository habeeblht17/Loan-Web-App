<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LoanApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'duration',
        'starting_date',
        'payment_date',
        'payment_amount',
        'description',
        'approved',
        'status',
    ];

    public function user () {
        return $this->belongsTo(User::class);
    }

    public function payment () {
        return $this->hasOne(User::class);
    }

}
