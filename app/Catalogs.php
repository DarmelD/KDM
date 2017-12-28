<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Catalogs extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'catalogs';
    
    protected $fillable = [
          'name',
          'body'
    ];
    

    public static function boot()
    {
        parent::boot();

        Catalogs::observe(new UserActionsObserver);
    }
    
    
    
    
}