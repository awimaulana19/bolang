<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operasional extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function olahraga(){
        return $this->belongsTo(Olahraga::class);
    }

    public function user(){
        return $this->belongsTo(Operasional::class);
    }
}
