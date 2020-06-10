<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
   
    public function store(Request $request){
        $question = new Question;
        $question->question =$request->question;
        $question->save();
        return redirect()->route('question.list');

    }
    public function edit(Question $question){
        return view('question.edit',compact('question'));
    }
    public function update(Request $request ,Question $question){
        $question->question=$request->question;
        $question->save();
        return redirect()->route('question.list');
    }
    public function  getall(){
        $questions=Question::all();
        return view('question.list',compact('questions'));
    }

    public function questionrandom(){
        // $question =Question::all()->random();
        return view('question.random');
    }
    public function question(){
        $question =Question::all()->random();
        return response()->json($question);
    }

}
