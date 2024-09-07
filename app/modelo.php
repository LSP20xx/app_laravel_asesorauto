<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\marca;

class modelo extends Model
{
    protected $table = 'modelo';

    public function marca()
    {
        return $this->hasOne(marca::class, 'id', 'id_marca');
    }
}

