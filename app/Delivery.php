<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table    = 'deliveries';

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
        'cart_id',
        'customer_id',
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
     * Get the cart that owns the delivery.
     */
    public function cart()
    {
        return $this->belongsTo('App\Cart', 'cart_id', 'id');
    }

    /**
     * Get the customer that owns the deleivery.
     */
    public function customer()
    {
        return $this->belongsTo('App\Customer', 'customer_id', 'id');
    }
}
