<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $questions = Question::with("answers")->get();
        return view("question/quiz")->with("questions", $questions);
    }

    public function result(Request $request)
    {
        $userPoints = 0;
        $questions = Question::with("answers")->get();
        foreach ($questions as $question) {
            $user_answer = $request->get($question->id);
            if ($user_answer == $question->answers->first()->which_is_right) {
                $userPoints++;
            }
        }
        return view("question/quiz_result")->with([
            "user_points" => $userPoints,
            "total" => count($questions)
        ]);
    }
}
