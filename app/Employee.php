<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table      = 'employees';

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
        'start_date',
        'end_date',
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded    = [
        'id',
        'user_id',
        'role_id',
        'store_id',
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
     * Get the user that owns the employee.
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    /**
     * Get the role that owns the employee.
     */
    public function role()
    {
        return $this->belongsTo('App\Role', 'role_id', 'id');
    }

    /**
     * Get the store that owns the employee.
     */
    public function store()
    {
        return $this->belongsTo('App\Store', 'store_id', 'id');
    }

    /**
     * Get the carts for the employee.
     */
    public function carts()
    {
        return $this->hasMany('App\Cart', 'employee_id', 'id');
    }
}
