<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class \SiteListController extends Controller
{
   	public function index()
   	{
   		$result = [
   			'id'   => 49,
   			'updated_at' => '09.09.2019',
   			'name' => 'site.name.com'
   		];
   		
   		return response()->json($result, 201);
   	}
}
