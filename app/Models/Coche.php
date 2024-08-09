<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    protected $primaryKey = 'matricula';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'matricula', 'marca', 'modelo', 'color', 'precio'
    ];

    public function compras()
    {

        return $this->hasMany(Compra::class, 'matricula');
    }

    public function revisiones()
    {
        return $this->hasMany(Revision::class, 'matricula');
    }
}