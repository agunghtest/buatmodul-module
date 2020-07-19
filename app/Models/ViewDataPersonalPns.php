<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ViewDataPersonalPns extends Model
{
    protected $table = 'view_data_personal_pns';

    public function mstLogbook()
    {
        return $this->belongsTo('App\Models\MstLogbook');
    }
}
