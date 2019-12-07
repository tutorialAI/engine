<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Videos;

class VideoController extends Controller
{
    public function index()
    {

    }

    public function getVideo()
    {
    	$result = Videos::where('busy',0)->inRandomOrder()->first();
    	return response()->json($result, 201);
    }
}
