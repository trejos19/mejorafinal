<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $fillable = [
        'NIF', 'matricula'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'NIF');
    }

    public function coche()
    {
        return $this->belongsTo(Coche::class, 'matricula');
    }
}