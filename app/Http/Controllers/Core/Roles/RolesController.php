<?php

namespace App\Http\Controllers\Core\Roles;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Models
use App\Models\Core\Roles\Role;
use App\Models\Core\Roles\Permission;
use App\Models\Core\ModelTables;

class RolesController extends Controller
{
    public function index()
    {
    	$roles = Role::all();
    	$permissions = $this->getPermissions();
    	return view('theme.core.roles.index', compact('roles', 'permissions'));
    }

    public function create()
    {
        $models = ModelTables::all();
        $permissions = $this->getPermissions();
        return view('theme.core.roles.create-role', compact('permissions', 'models'));
    }

    public function getPermissions()
    {
    	return Permission::all();
    }

    public function availablePermissionsForModel($id)
    {
        $permissions = Permission::where('model_id', $id)->get();

        return response()->json($permissions, 200);
    }
}
