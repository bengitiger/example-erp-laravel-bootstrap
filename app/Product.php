<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table      = 'products';

    /**
     * The table primary key.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The increment of the primary key.
     *
     * @var bool
     */
    public $incrementing  = false;

    /**
     * The type of the primary key..
     *
     * @var string
     */
    protected $keyType    = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable   = [
        'name',
        'stock',
        'low_quantity',
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded    = [
        'id',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden     = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts      = [
        'id' => 'string',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps    = false;

    /**
     * Get the purchases for the product.
     */
    public function purchases()
    {
        return $this->hasMany('App\Purchase', 'product_id', 'id');
    }

    /**
     * Get the sales for the product.
     */
    public function sales()
    {
        return $this->hasMany('App\Sale', 'product_id', 'id');
    }

    /**
     * Get the price associated with the product.
     */
    public function price()
    {
        return $this->hasOne('App\Price', 'product_id', 'id');
    }
}
