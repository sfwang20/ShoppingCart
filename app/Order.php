<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Order extends Model
{
  use SoftDeletes;
  protected $dates = ['deleted_at'];

  protected $fillable = ['amount', 'address', 'creditCardNum', 'coupon', 'region', 'country', 'status'];
  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function cart()
  {
    return $this->belongsTo('App\Cart');
  }
}
