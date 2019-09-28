<?php

namespace App\Http\Controllers\Core\Settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Models
use App\Models\Core\ModelTables;

class ModelsController extends Controller
{
    public function index()
    {
    	$models = ModelTables::all();
    	return view('theme.core.settings.models.index', compact('models'));
    }

    public function create()
    {
    	return view('theme.core.settings.models.create');
    }

    public function store(Request $request)
    {

    }
}
