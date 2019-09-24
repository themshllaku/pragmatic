<?php

namespace App\Models\Core\Roles;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';

    protected $fillable = ['name'];
}
