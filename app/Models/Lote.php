<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
    use HasFactory;

    protected $fillable = [
        "name"
    ];

    public function bezerros(){
        return $this->belongsToMany(Bezerro::class, 'lote_bezerros', 'lote_id', 'bezerro_id');
    }
    
}
