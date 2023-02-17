<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\traits\GenUid;

class Olahraga extends Model
{
    use HasFactory, GenUid;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function operasional(){
        return $this->hasMany(Operasional::class);
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
}
