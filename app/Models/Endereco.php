<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    public function propriedade()
    {
        return $this->belongsTo(Propriedade::class);
    }

    protected $fillable = [
        'estado',
        'cidade',
        'bairro',
        'rua',
        'referenia',
        'cep'
    ];
}
