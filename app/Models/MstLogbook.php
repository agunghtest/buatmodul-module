<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MstLogbook extends Model
{
    protected $table = 'mst_logbook';

    public function refBulan()
    {
        return $this->hasOne('App\Models\RefBulan', 'id', 'id_ref_bulan');
    }

    public function viewDataPersonalPns()
    {
        return $this->hasOne('App\Models\ViewDataPersonalPns', 'id', 'id_mst_pegawai');
    }
}
