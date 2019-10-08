<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public static function administator()
    {
      return User::getPermissions();
    }
}
