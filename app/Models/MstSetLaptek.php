<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MstSetLaptek extends Model
{
    protected $table = 'mst_setlaptek';

    public function refPersetujuanLaptek()
    {
        return $this->hasOne('App\Models\RefPersetujuanLaptek', 'id', 'id_ref_persetujuan_laptek');
    }
}
