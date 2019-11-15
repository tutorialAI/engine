<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideosController extends Controller
{
	public function index()
	{
		$result = "Video here";
		return view('dashboard.video')->with('result',$result);
	}
	public function getVideos()
	{
	   	$videos = Video::query()->where('site','42')->orderBy('id','desc')->paginate(5);
	   	return view('dashboard.video')->with('videos',$videos);
	}
}
