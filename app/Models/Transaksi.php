<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\traits\GenUid;

class Transaksi extends Model
{
    use HasFactory, GenUid;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function pengguna(){
        return $this->belongsTo(User::class, 'pengguna_id');
    }

    public function lapangan(){
        return $this->belongsTo(Lapangan::class);
    }

    public function olahraga(){
        return $this->belongsTo(Olahraga::class);
    }

    public function jadwal(){
        return $this->belongsTo(Jadwal::class);
    }
}
