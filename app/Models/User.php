<?php

namespace App\Models;

use App\Models\NextOfKin;
use App\Models\UserProfile;
use App\Models\LoanApplication;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'middlename',
        'email',
        'phone',
        'DOB',
        'gender',
        'street',
        'city',
        'state',
        'country',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userProfile () {
        return $this->hasOne(UserProfile::class);
    }

    public function nextOfKin () {
        return $this->hasOne(NextOfKin::class);
    }

    public function loanApplications () {
        return $this->hasMany(LoanApplication::class);
    }
}
