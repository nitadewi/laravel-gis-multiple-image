<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Wisata;

class Foto extends Model
{
    protected $table = 'foto';
    protected $primaryKey = 'id_foto';
    protected $guarded =
    [
        'id_foto'
    ];
    public $timestamps = false;

    public function wisata()
    {
        return $this->belongsTo(Wisata::class,'id_wisata');
    }
}
