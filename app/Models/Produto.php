<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produto';
    protected $primaryKey = 'produto';
    public $timestamps = false;

    protected $fillable = [
        'produto','referencia', 'descricao', 'garantia', 'ativo', 'data_input', 'fabrica'
    ];
}
