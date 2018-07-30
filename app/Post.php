<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

  use SoftDeletes;

  public function category()
  {
    return $this->belongsTo('App\Category');
  }

  protected $fillable = [
    'title', 'content', 'featured', 'category_id', 'slug'
  ];

  public function getFeaturedAttribute($featured)
  {
    return asset($featured);
  }

  protected $dates = ['deleted_at'];
}
