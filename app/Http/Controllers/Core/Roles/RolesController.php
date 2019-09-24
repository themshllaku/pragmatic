<?php

namespace App\Http\Controllers\Core\Roles;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RolesController extends Controller
{
    public function index()
    {
    	return view('theme.core.roles.index');
    }
}
