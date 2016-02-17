<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    protected $fillable = [
        'name', 'type', 'url', 'status'
    ];

    public function scopePublished($query)
    {
    	$query->where('status', '=', 'published');
    }

    public function scopeUnublished($query)
    {
    	$query->where('status', '=', 'hidden');
    }

    public function getStatusAttribute($value)
    {
        return ucfirst($value);
    }

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function articles()
    {
        return $this->hasMany('App\Models\Article');
    }
}
