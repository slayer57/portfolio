<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $settings = Setting::latest()->first();  // Fetching the first entry
        return view('frontend.index',compact('settings'));
    }
}
