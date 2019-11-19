<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SiteList;

class SiteListController extends Controller
{     

   	public function index()
   	{

         $site_list = SiteList::all()->where('id','>', 41);
         $count_list = DB::table('videoinfo')->select(DB::raw('count(*) as cnt, site'))->groupBy('site')->get()->toArray();

         $count_list_column = array_column($count_list, 'site');
         foreach ($site_list as $key => $value) {
            $index = array_search($value['id'], $count_list_column);
            $site_list[$key]['count'] = $count_list[$index]->cnt;
         }
   		return response()->json($site_list, 201);
   	}
}
