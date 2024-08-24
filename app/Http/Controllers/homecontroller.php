<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subject;
use App\Models\question;
use App\Models\awnser;


class homecontroller extends Controller
{

public function firstPage(){
    return view('first_page');
}

    public function showExamPage()
{
    $posts = Subject::where('status', 'active')->paginate(4);
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
    
        return view('exam_page', compact('questions', 'timer', 'subClass')); // Pass the $subClass variable to the view
    }


    public function submitTest(Request $request)
    {
        $questionIds = $request->input('question_id');
        $answers = $request->except(['_token', 'question_id']);
        $userId = auth()->id(); // Get the authenticated user's ID
    
        $correctAnswers = 0;
        $totalQuestions = count($questionIds);
        $userAnswers = [];
        $correctAnswersArray = [];
    
        foreach ($questionIds as $id) {
            $question = question::find($id);
            if (isset($answers['answer_' . $id])) {
    $userAnswer = $answers['answer_' . $id];
} else {
    $userAnswer = null; // Set $userAnswer to null if the user did not choose anything
}
    
            // Insert the user's answer and the correct answer into the 'answers' table
            $answer = new \App\Models\awnser();
            $answer->question_id = $id;
            $answer->choiceanswer = $userAnswer;
            $answer->correctanswer = $question->finalanswer;
            $answer->statusanswer = ($userAnswer == $question->finalanswer) ? 'Correct' : 'Incorrect';
            $answer->save();
    
            $userAnswers[$id] = $userAnswer;
            $correctAnswersArray[$id] = $question->finalanswer;
    
            if ($userAnswer == $question->finalanswer) {
                $correctAnswers++;
            }
        }
    
        $percentage = ($correctAnswers / $totalQuestions) * 100;
    
        // Pass the $questions variable to the view
        $questions = question::whereIn('question_id', $questionIds)->get();
    
        return view('result', compact('correctAnswers', 'totalQuestions', 'percentage', 'userAnswers', 'correctAnswersArray', 'questions'));
    }
}