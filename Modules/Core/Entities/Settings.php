<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
	protected $fillable = [];
	protected $connection = 'aaa';
	protected $table = 'tb_test';
}
