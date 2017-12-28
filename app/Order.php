<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'order';
    
    protected $fillable = [
          'body',
          'price',
          'status',
          'buyer'
    ];
    

    public static function boot()
    {
        parent::boot();

        Order::observe(new UserActionsObserver);
    }
    
    
    
    
}