<?php

namespace App\Http\Controllers\Core\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {
    	return view('theme.core.pages.index');
    }

    public function create()
    {
    	return view('theme.core.pages.create');
    }
}
