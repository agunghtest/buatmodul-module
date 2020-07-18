<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MstSetLogbook extends Model
{
    protected $table = 'mst_setlogbook';

    public function refFormatLogbook()
    {
        return $this->hasOne('App\Models\RefFormatLogbook', 'id', 'id_ref_format_logbook');
    }
}
