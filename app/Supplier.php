<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table      = 'suppliers';

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
        'email',
        'phone',
        'address',
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
     * Get the purchases for the supplier.
     */
    public function purchases()
    {
        return $this->hasMany('App\Purchase', 'supplier_id', 'id');
    }
}
