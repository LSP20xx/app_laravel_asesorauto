<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\equipamiento;

class auto_tiene_equipamiento extends Model
{

    protected $table = 'auto_tiene_equipamiento';

    public function equipamiento()
    {
        return $this->hasOne(equipamiento::class, 'id', 'id_equipamiento');
    }
}
