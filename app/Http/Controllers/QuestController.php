<?php

namespace App\Http\Controllers;
use App\Questions;
use App\Options;

use Illuminate\Http\Request;
use Symfony\Component\Console\Question\Question;

class QuestController extends Controller
{
    public function index()
    {
        $questions=Questions::all();
        $options=Options::all();
        return view('home2')->with(compact('questions','options'));
    }
    public function check(Request $request)
    {
        
        $id=$request->id;
        $num=count($id);
        $pts=0;
        for($i=0;$i<$num;$i++)
        {
            $choice[$i]=$request->input($id[$i]);
        }
        $questions=Questions::all();
        foreach($questions as $q)
        {
            $q_id=$q->id;
            for($i=0;$i<$num;$i++)
            {
                if($q_id==$id[$i])
                {
                    $ans[$i]=$q->answer;
                }
            }
        }
        for($i=0;$i<$num;$i++)
        {
            if($choice[$i]==$ans[$i])
            {
                $pts+=1;
            }
        }
           
        return view('show_marks')->with(compact('pts','num'));
    }
}
