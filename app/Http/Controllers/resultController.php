<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resultController extends Controller
{
    public function show(){    
        return view('admin.result.show_result');
    }
}
