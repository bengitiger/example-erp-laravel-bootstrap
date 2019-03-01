<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table    = 'carts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded  = [
        'id',
        'employee_id',
        'sale_id',
        'created_at',
        'updated_at',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps  = false;

    /**
     * Get the employee that owns the cart.
     */
    public function employee()
    {
        return $this->belongsTo('App\Employee', 'employee_id', 'id');
    }

    /**
     * Get the sales for the cart.
     */
    public function sales()
    {
        return $this->belongsToMany('App\Sale', 'sale_id', 'id');
    }

    /**
     * Get the delivery associated with the cart.
     */
    public function delivery()
    {
        return $this->hasOne('App\Delivery', 'cart_id', 'id');
    }
}
