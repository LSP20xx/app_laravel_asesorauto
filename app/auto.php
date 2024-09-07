<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\modelo;
use App\tipo_combustible;
use App\tipo_vendedor;

class auto extends Model
{
    protected $table = 'auto';

    public function modelo()
    {
        return $this->hasOne(modelo::class, 'id', 'id_modelo');
    }

    public function tipo_combustible()
    {
        return $this->hasOne(tipo_combustible::class, 'id', 'id_tipo_combustible');
    }

    public function tipo_vendedor()
    {
        return $this->hasOne(tipo_vendedor::class, 'id', 'id_tipo_vendedor');
    }
}
