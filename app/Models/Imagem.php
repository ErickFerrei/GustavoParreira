<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    use HasFactory;


    protected $fillable = [
        'img'
    ];

    public function propriedade()
    {
        return $this->belongsTo(Propriedade::class);
    }
}
