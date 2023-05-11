<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fabrica extends Model
{
    public function produtos()
    {
        return $this->hasMany('App\Models\Produto', 'fabricas');
    }
}
