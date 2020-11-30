<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function index()
    {
        $questions = Question::with("answers")->get();
        return view("question/questions")->with("questions", $questions);
    }

    public function create()
    {
        return view('question/create_question');
    }

    public function save(Request $request)
    {
        $question = new Question(['body' => $request->get('body')]);
        $question->save();

        $answer = new Answer([
            'answer_1' => $request->get('first_answer'),
            'answer_2' => $request->get('second_answer'),
            'answer_3' => $request->get('third_answer'),
            'answer_4' => $request->get('fourth_answer'),
        ]);
        $answer->question_id = $question->id;
        $ansarr = ['first_answer', 'second_answer', 'third_answer', 'fourth_answer'];
        foreach ($ansarr as $idx=>$ans) {
            if ($request->get('right_answer') == $ans) {
                $answer->which_is_right = ++$idx;
            }
        }
        $answer->save();
    }

    public function update(Request $request, Question $question)
    {
    }

    public function delete(Question $question)
    {

    }

}
