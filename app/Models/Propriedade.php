<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propriedade extends Model
{
    use HasFactory;
    public function endereco()
    {
        return $this->hasOne(Endereco::class);
    }



    protected $fillable = [
        'titulo',
        'descricao',
        'tipo',
        'status',
        'quarto',
        'banheiro', 'images',
        'endereco_id',
        'garagem',
        'area'
    ];
    public function imagens()
    {
        return $this->hasMany(Imagem::class);
    }
}
