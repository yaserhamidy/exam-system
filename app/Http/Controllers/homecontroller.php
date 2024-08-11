<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{



    public function show(){    
        return view('welcome');
    }

    
    // public function welcome(){
    //     return view('aboutUs');
    // }



    // public function contact(){
    //     return view('contactUs');
    
    // }


    // public function login(){
    //     return view('login');
    // }
     

     
    // public function calculate(){
    //     $a = 10;
    //     $y = 20;
    //     $b = 100;
    //     $c = 9;
    //     $d = 30;
    //     $f = 4;
    //     $sum = $a + $y;
    //     $resultsqrt = sqrt($c);
    //     $divider = $b/$a;
    //     $resultTotal = $a * $b + sqrt($c) - $d/$d * $f;

    //     return view('calculate',compact('sum', 'resultsqrt','divider','resultTotal'));
    // }

}
