<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revision extends Model
{
    protected $fillable = [
        'matricula', 'filtro', 'aceite', 'frenos'
    ];

    public function coche()
    {
        return $this->belongsTo(Coche::class, 'matricula');
    }
}