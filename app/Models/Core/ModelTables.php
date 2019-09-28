<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;

class ModelTables extends Model
{
    protected $table = 'models';

    public function can($action)
    {
    	$field = 'p_' . $action . '_active';
    	if($this->$field)
    	{
    		return true;
    	}
    	return false;
    }

    public function user() {
        return $this->belongsTo('App\User', 'created_by', 'id');
    }
}
