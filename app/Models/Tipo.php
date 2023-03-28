<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
// use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Tipo extends Model
{
    use HasFactory;

    protected $table='tipos';

    protected $fillable=[
        'nome'
    ];

    /**
     * Get all of the comments for the Tipo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function imovels(): HasMany
    {//tipo pode ter vários imoveis
        return $this->hasMany(Imovel::class);
    }
}

