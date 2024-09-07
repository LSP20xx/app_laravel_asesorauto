<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\segmento;

class auto_tiene_segmento extends Model
{
    protected $table = 'auto_tiene_segmento';

    protected $primaryKey = null;
    public $incrementing = false;

    public function segmento()
    {
        return $this->hasOne(segmento::class, 'id', 'id_segmento');
    }

    public function auto()
    {
        return $this->hasOne(auto::class, 'id', 'id_auto');
    }
}
