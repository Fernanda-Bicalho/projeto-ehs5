<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calibracao extends Model
{
    use HasFactory;

    protected $fillable = [
        'equipamento_id',
        'laboratorio',
        'certificado',
        'norma',
        'dtcalibracao',
        'prazocalibracao',
        'proxcalibracao',
        'arquivo',
    ];
}
