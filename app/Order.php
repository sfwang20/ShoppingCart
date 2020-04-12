<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = ['amount', 'address', 'creditCardNum', 'coupon', 'region', 'country'];
  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function cart()
  {
    return $this->belongsTo('App\Cart');
  }
}
