<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table    = 'prices';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'value',
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded  = [
        'id',
        'product_id',
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
     * Get the product that owns the price.
     */
    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id', 'id');
    }
}
