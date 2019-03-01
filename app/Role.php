<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table    = 'roles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded  = [
        'id',
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
     * Get the salary associated with the role.
     */
    public function salary()
    {
        return $this->hasOne('App\Salary', 'role_id', 'id');
    }

    /**
     * Get the employees for the role.
     */
    public function employees()
    {
        return $this->hasMany('App\Employee', 'role_id', 'id');
    }
}
