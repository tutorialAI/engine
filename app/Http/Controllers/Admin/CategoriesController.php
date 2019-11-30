<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function show()
    {
    	$result = DB::table('categories')->get();
    	return response()->json($result, 201);
    }
}
