<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Foto;

class Wisata extends Model
{
    protected $table = 'wisata';
    protected $primaryKey = 'id_wisata';
    protected $guarded =
    [
        'id_wisata'
    ];
    public $timestamps = false;

    public function foto()
    {
        return $this->hasMany(Foto::class,'id_wisata');
    }
}
