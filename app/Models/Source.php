<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    protected $fillable = [
        'name', 'type', 'url', 'category_id',
    ];

    protected $hidden = [
        'autograb', 'start', 'duration',
    ];

    public function scopePublished($query)
    {
    	$query->where('published', '==', 'published');
    }

    public function scopeUnublished($query)
    {
    	$query->where('published', '==', 'hidden');
    }
}
