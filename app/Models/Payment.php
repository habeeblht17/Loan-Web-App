<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillale = [
        'loanApplication_id',
        'payment_amount',
        'payment_date',
    ];

    public function loanApplication () {
        return $this->belongsTo(LoanApplication::class);
    }
}
