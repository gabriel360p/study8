<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Imovel extends Model
{
    use HasFactory;

    protected $table ='imovels';

    protected $fillable= [
        'titulo',
        'descricao',
        'tipo_id',
    ];

    /**
     * Get the user associated with the Imovel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function endereco(): HasOne
    {//cada cada endereco só tem um imovel 1 .. 1
        return $this->hasOne(Endereco::class);
    }

    /**
     * Get the user associated with the Imovel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    /**
     * The roles that belong to the Imovel
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tipos(): BelongsTo
    {
        return $this->belongsTo(Tipo::class);
    }

    /**
     * Get all of the comments for the Imovel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    
    // public function fotos(): HasMany
    // {
    //     return $this->hasMany(Foto::class);
    // }
}
