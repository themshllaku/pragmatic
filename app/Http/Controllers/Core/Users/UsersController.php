<?php

namespace App\Http\Controllers\Core\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Models
use App\User;

class UsersController extends Controller
{
    /**
     * Return view to show users
     */
    public function index()
    {
    	$users = $this->getUsers();
    	return view('theme.core.users.index', compact('users'));
    }

    /**
     * Return view to create user
     */
    public function create()
    {
    	return view('theme.core.users.create');
    }

    /**
     * Store new user to DB
     */
    public function store(Request $request)
    {
    }

    protected function getUsers()
    {
    	return User::where('id', '!=', auth()->user()->id)->get();
    }
}
