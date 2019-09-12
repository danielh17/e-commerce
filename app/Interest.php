<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    protected $fillable = ['name'];

    public function category()
    {
      return $this->belongsToMany(Category::class)->withTimestamps();
    }
}
