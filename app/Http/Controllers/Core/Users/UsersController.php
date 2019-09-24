<?php

namespace App\Http\Controllers\Core\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Models
use App\User;

class UsersController extends Controller
{
    public function index()
    {
    	$users = $this->getUsers();
    	return view('theme.core.users.index', compact('users'));
    }

    public function create()
    {
    	return view('theme.core.users.create');
    }

    protected function getUsers()
    {
    	return User::where('id', '!=', auth()->user()->id)->get();
    }
}
