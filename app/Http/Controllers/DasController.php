<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DasController extends Controller
{
    public function refreshDashboard(){
        return view('welcome');
    }
}
