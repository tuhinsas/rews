<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Article extends Model
{
    protected $dates = ['published_at'];

    protected $fillable = [
    	'source_id','title', 'description', 'url', 'image_url','published_at',
    ];

    public function setDescriptionAttribute($description)
    {
    	$this->attributes['description'] = preg_replace("/&#?[a-z0-9]{2,8};/i","", $description);
    }

    public function setPublishedAtAttribute($date)
    {
    	$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d H:i:s',$date);
    }

    public function media()
    {
        return $this->hasOne('App\Models\Media', 'object_id');
    }

    public function source()
    {
        return $this->belongsTo('App\Models\Source');
    }
}
