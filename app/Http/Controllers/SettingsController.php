<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Semester;
class SettingsController extends Controller
{
    public function add()
    {  
    	return view('semester.add');
    }
}
