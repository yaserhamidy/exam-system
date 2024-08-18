<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subject;
use App\Models\question;


class homecontroller extends Controller
{



    public function show()
    {
        $posts = subject::where('status', 'active')->get();
        return view('welcome', compact('posts'));
    }

    // public function exam_page()
    // {
    //     $questions = \Illuminate\Support\Facades\DB::table('questions')->get();
    //     return view('exam_page', compact('questions'));
    // }
    public function exam_page($sub_classesses_id)
    {
        $subClass = subject::findOrFail($sub_classesses_id);
        $questions = question::where('sub_classesses_id', $sub_classesses_id)->get();
        $timer = $subClass->timer;
        return view('exam_pages', compact('questions', 'timer'));
    }
    
}