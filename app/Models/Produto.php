<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $primaryKey = 'produto';

    public function fabrica()
    {
        return $this->belongsTo('App\Models\Fabrica');
    }

    protected $fillable = ['produto','referencia', 'descricao', 'garantia', 'ativo', 'fabrica_id'];
}
