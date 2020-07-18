<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefFormatLogbook extends Model
{
    protected $table = 'ref_format_logbook';

    public function mstSetLogbook()
    {
        return $this->belongsTo('App\Models\MstSetLogbook');
    }
}
