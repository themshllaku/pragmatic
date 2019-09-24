<?php

namespace App\Models\Core\Roles;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = ['name', 'description', 'active'];
}
