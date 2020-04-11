<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = ['name', 'price','price_origin', 'image', 'description', 'stock', 'size'];

  public function carts()
  {
    return $this->belongsToMany('App\Cart')
                ->withPivot('quantity')
                ->withTimestamps();
  }

}
