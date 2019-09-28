<?php

namespace App\Http\Controllers\Core\Roles;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Models
use App\Models\Core\ModelTables;
use App\Models\Core\Roles\Permission;

class PermissionsController extends Controller
{
	protected $permissions =
	[
		'p_create_active' => 'Create',
		'p_read_active' => 'Read',
		'p_update_active' => 'Update',
		'p_delete_active' => 'Delete'
	];

    public function create()
    {
    	$models = ModelTables::all();
    	return view('theme.core.roles.create-permission', compact('models'));
    }

    public function store(Request $request)
    {
    	$permission = $request->permission;
    	preg_match('/^[^_]*_\K[^_]+/', $permission, $mod_permission);

    	$model = $this->getModel($request->model);
    	$slug = $mod_permission[0] . '-' . $model->model_name;
    	$model->$permission = true;
    	$model->save();

    	$permission = new Permission;
		$permission->name = $request->name;
		$permission->slug = $slug;
		$permission->model_id = $model->id;
		$permission->save();

		return redirect()->back()->with('success', 'Permission is created !');
    }

    public function availablePermissionsForModel($id)
    {
    	$model = ModelTables::findOrFail($id);

    	$available = array();

    	foreach($this->permissions as $permission => $name)
    	{
    		if(!$model->$permission)
    		{
    			array_push($available, ['permission' => $permission, 'name' => $name]);
    		}
    	}
        if(count($available) > 0)
        {
            return response()->json($available, 200);
        }
        return response()->json(['message' => 'All permissions are set for this model.'], 200);
    }

    public function getModel($id)
    {
    	return ModelTables::findOrFail($id);
    }
}
