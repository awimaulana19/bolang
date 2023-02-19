<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function olahraga(){
        return $this->hasMany(Olahraga::class);
    }

    public function lapangan(){
        return $this->hasMany(Lapangan::class);
    }

    public function jadwal(){
        return $this->hasMany(Jadwal::class);
    }

    public function transaksi(){
        return $this->hasMany(Transaksi::class);
    }

    public function operasional(){
        return $this->hasMany(Operasional::class);
    }
}
