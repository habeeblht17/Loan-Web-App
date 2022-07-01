<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NextOfKin extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'DOB',
        'gender',
        'relationship',
        'street',
        'city',
        'state',
        'country',
        'complete',
    ];

    public function user () {
       return $this->belongsTo(User::class);
    }
}
