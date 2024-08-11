<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catagory;

class catagoryController extends Controller
{
    public function show(){  
        $catagories=catagory::all();

        return view('admin.catagory.show_catagory',compact('catagories'));
    }
    public function add(){  
        return view('admin.catagory.add_catagory');
    }
    
    
public function addCatagory(Request $request){
    $name = $request->name;
    $description = $request->description;
    

    $catagory = new catagory();
    
    $catagory->name = $name;
    $catagory->description = $description;

    $catagory->save();
    
    return redirect()->route('show_catagory');
   
}

public function catagoryDelete($cat_id){
        $catagory = catagory::find($cat_id);
        $catagory->delete();
         return redirect()->route('show_catagory');
} 


public function catagoryEdit($cat_id){
    $catagory = catagory::find($cat_id);
    return view('admin.catagory.Edit_catagory', compact('catagory'));


}

    
public function editCatagory(Request $request){
    $name = $request->name;
    $description = $request->description;
    

    $catagory = catagory::find($request->cat_id);
    $catagory->name = $name;
    $catagory->description = $description;

    $catagory->save();
    
    // $catagories = catagory::all();
    // return view('admin.catagory.show_catagory', compact('catagories'));
    return redirect()->route('show_catagory');

}

}