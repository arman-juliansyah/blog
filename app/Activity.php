<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
	protected $table    = 'activity';

    protected $fillable = [
        'type',
        'title',
        'user',
        'type_data',
        'ref_id',
    ];
}
