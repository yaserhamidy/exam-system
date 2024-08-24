<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\subject;
use App\Models\result;

class resultController extends Controller
{
    public function show()
    {
        $results = Result::with('student', 'exam')->get();
        return view('admin.result.show_result', compact('results'));
    }
    public function storeResult($correctAnswers, $totalQuestions, $userId, $subClass)
{
    $result = new \App\Models\result();
    $result->correct_answers = $correctAnswers;
    $result->incorrect_answers = $totalQuestions - $correctAnswers;
    $result->user_id = $userId; // Assuming you have a foreign key relationship between Result and User models
    $result->exam_id = $subClass->id; // Assuming you have a foreign key relationship between Result and Exam models
    $result->save();
}
}
