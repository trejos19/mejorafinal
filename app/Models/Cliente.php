<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $primaryKey = 'NIF';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'NIF', 'nombre', 'direccion', 'ciudad', 'telefono'
    ];

    public function compras()
    {
        return $this->hasMany(Compra::class, 'NIF');
    }
}