<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'description', 'image'];

    public function category()
    {
      return $this->belongsToMany(Category::class)->withTimestamps();
    }
}
