<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $fillable = ['name'];
    //protected $guarded = [];

    public function product()
    {
      return $this->belongsToMany(Product::class)->withTimestamps();
    }

    public function interest()
    {
      return $this->belongsToMany(Interest::class)->withTimestamps();
    }
}
