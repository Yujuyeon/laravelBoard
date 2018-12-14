<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class quizController extends Controller
{
    public function store(Request $request)
    {
        $quiz = $request->input('quiz');
        $answer = $request->input('answer');
        $ex1 = $request->input('example1');
        $ex2 = $request->input('example2');
        $ex3 = $request->input('example3');
        $examples = $ex1.'/'.$ex2.'/'.$ex3;
        //디비 파사드 방식
        // DB::insert('insert into board (id) values (?)', [$title]);
        
        //쿼리 빌더 방식
        DB::table('quiz')->insert(['question' => $quiz, 'answer' => $answer, 'examples' => $examples]);
        return redirect('/');

        //앨로퀀드 방식
        // $quiz = new quiz();
        // $quiz->id = $title;
        // $quiz->save();
        // return $title;
    }

    public function select()
    {
        $result = DB::table('quiz')->get();
        $re = "re";
        $quiz = DB::table('quiz')->pluck('question');
        $answer = DB::table('quiz')->pluck('answer');
        $examples = DB::table('quiz')->pluck('examples');
        foreach ($result as $q) 
        {
            echo $q->question;
            echo $q->answer;
            echo $q->examples;
        }
    }
}
