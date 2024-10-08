<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens,Notifiable,HasRoles;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','mobile','ip','dob','wallet','status','username','otp'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'created_at' => 'datetime:Y-m-d H:i:s',
    ];

    public function get_roles(){
        $roles = [];
        foreach ($this->getRoleNames() as $key => $role) {
            $roles[$key] = $role;
        }

        return $roles;
    }

    public function setting()
    {
        return $this->hasOne(UserSetting::class,'user_id','id');
    }

    public function recharges(){
        return $this->hasMany(Transaction::class)->where('status','Wallet');
    }

    public function wonamount(){
        return $this->hasMany(Transaction::class)->where('status','Won');
    }

    public function referralamt(){
        return $this->hasMany(Transaction::class)->where('status','Referral');
    }
    public function prizeamt(){
        return $this->hasMany(Transaction::class)->where('status','Prize');
    }
    public function withdrawamt(){
        return $this->hasMany(Transaction::class)->where('status','Withdraw');
    }

    public function getAuthPassword()
    {
        return $this->otp;
    }
}
