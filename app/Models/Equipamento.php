<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'modelo',
        'serie',
        'tipo',
        'fabricante',
        'mincapac',
        'maxcapac',
        'escala',
        'localizacao',
        'situacao',
        'imagem',
    ];


    public function calibracoes(){
        return $this->hasMany(Calibracao::class);
    }

}
