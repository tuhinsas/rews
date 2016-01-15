<?php

namespace Rews\Models;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    protected $fillable = [
        'name', 'type', 'url', 'category_id',
    ];

    protected $hidden = [
        'autograb', 'start', 'duration',
    ];
}