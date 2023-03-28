<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Endereco extends Model
{
    use HasFactory;

    protected $fillable= [
        'rua',
        'numero',
        'bairro',
        'imovel_id',
    ];
    
    /**
     * Get the user that owns the Endereco
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function imovel(): BelongsTo
    {//inverso do relacionamento hasOne com imovel 1 .. 1
        return $this->belongsTo(Imovel::class);
    }
}
