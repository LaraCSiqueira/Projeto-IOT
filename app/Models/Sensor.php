<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;

    protected $fillable = [
        'ambiente_id',
        'codigo',     // TEMP 01, TEMP 02; LED 01, LED 02 ...
        'tipo',       // led, temperatura ...
        'descricao',
        'status'      // ativo ou inativo
    ];

    public function registros(){
        return $this->hasMany(Registro::class);
    }

    public function ambientes(){
        return $this->belongsTo(Ambiente::class);
    }
}
