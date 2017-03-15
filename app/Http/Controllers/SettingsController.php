<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Setting;

use App\Semester;

class SettingsController extends Controller
{
    public function index()
    {
        $setting = Setting::all();
        $semester = Semester::all();

        return view('settings.index', array('setting' => $setting, 'semester' => $semester ));
    //    return view('settings.index' compact($result));
    }

}
