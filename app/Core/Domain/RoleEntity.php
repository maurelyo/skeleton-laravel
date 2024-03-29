<?php

namespace App\Core\Domain;

use Illuminate\Database\Eloquent\Model;

class RoleEntity extends Model
{
    const GUARD_NAME = 'api';

    /**
     * @var string
     */
    protected $table = 'roles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'guard_name',
    ];
}
