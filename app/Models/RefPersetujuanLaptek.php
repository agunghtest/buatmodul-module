<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefPersetujuanLaptek extends Model
{
    protected $table = 'ref_persetujuan_laptek';

    public function mstSetLaptek()
    {
        return $this->belongsTo('App\Models\MstSetLaptek');
    }
}
