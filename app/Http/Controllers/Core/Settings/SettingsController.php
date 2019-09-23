<?php

namespace App\Http\Controllers\Core\Settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function index()
    {
    	return view('theme.core.settings.index');
    }
}
