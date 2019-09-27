<?php

namespace App\Models\Core\Roles;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';

    protected $fillable = ['name', 'slug', 'model_id'];

    public function model()
    {
    	return $this->belongsTo('App\Models\Core\ModelTables', 'model_id', 'id');
    }
}
