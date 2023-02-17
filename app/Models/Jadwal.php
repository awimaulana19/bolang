<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\traits\GenUid;

class Jadwal extends Model
{
    use HasFactory, GenUid;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function lapangan(){
        return $this->belongsTo(Lapangan::class);
    }

    public function olahraga(){
        return $this->belongsTo(Olahraga::class);
    }

    public function transaksi(){
        return $this->hasMany(Transaksi::class);
    }
}
