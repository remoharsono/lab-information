<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Role extends Authenticatable
{
    const KEPALA_LAB = 1;
    const STAFF_REGISTRASI = 2;
    const STAFF_LAB = 3;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_name', 'role'
    ];

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var int
     */
    public $role;
}
