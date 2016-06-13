<?php

namespace laraland\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model{

  protected $fillable=['title', 'slug', 'description', 'price', 'image', 'stock'];
  protected $hidden = [];

  
}
