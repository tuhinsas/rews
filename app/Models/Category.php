<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['title','description','icon'];


    public function articles()
    {

    	return $this->hasManyThrough('App\Models\Article','App\Models\Source');
    }
}
