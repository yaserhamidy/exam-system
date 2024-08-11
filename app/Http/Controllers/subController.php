<?php
                                          
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subject;
use App\Models\catagory;


class subController extends Controller
{
    public function show(){   
        $subject = subject::leftjoin('categories', 'categories.cat_id' , 'sub_classesses.cat_id')
        ->select('sub_classesses.*', 'categories.name as name')->get(); 
        return view('admin.subClass.show_sub', compact('subject'));
    }
    public function add(){  
        $catagory = catagory::all();
        return view('admin.subClass.add_sub' ,compact('catagory'));
    }
    public function addSubject(Request $request){
        $name = $request->sub_name;
        $status = $request->status;
        $timer = $request->timer;
        $question_count = $request->question_count;
        $total_score = $request->total_score;
        $cat_id = $request->cat_id;
        
    
        $subject = new subject();      
        $subject->sub_name = $name;    
        $subject->status = $status;
        $subject->timer = $timer;
        $subject->question_count = $question_count;
        $subject->total_score = $total_score;
        $subject->cat_id = $cat_id;
        $subject->save();
    return redirect()->route('show_sub');
        
    }

    public function subjectDelete($sub_classesses_id){
        $subject = subject::find($sub_classesses_id);
        $subject->delete();
        return redirect()->back();
      } 
    public function subjectEdit($sub_classesses_id){
         $catagory = catagory::all();
         $subject = subject::find($sub_classesses_id);
         return view('admin.subClass.Edit_sub', compact('subject','catagory'));
          

}

  public function EditSubject(Request $request){
    
    $name = $request->sub_name;
    $status = $request->status;
    $timer = $request->timer;
    $question_count = $request->question_count;
    $total_score = $request->total_score;
    $cat_id = $request->cat_id;
    

    $subject = subject::find($request->sub_classesses_id);
    $subject->sub_name = $name;
    $subject->status = $status;
    $subject->timer = $timer;
    $subject->question_count = $question_count;
    $subject->total_score = $total_score;
    $subject->cat_id = $cat_id;

    $subject->save(); 
    
    return redirect()->route('show_sub');    

  }

}
