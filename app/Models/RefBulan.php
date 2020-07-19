<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefBulan extends Model
{
    protected $table = 'ref_bulan';

    public function mstLogbook()
    {
        return $this->belongsTo('App\Models\MstLogbook');
    }
}
