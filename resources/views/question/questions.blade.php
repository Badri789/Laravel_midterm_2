@extends('layout.layout')

@section('title')
    <title>All Questions</title>
@endsection

@section('content')
    @foreach($questions as $question)
        <div style="width: 50%; margin: 0 auto;" class="card mt-4">
            <div class="card-body">
                <p class="card-text">{{$question->body}}</p>
                Answers:
                <p class="@if($question->answers->first()->which_is_right == 1) text-success @endif">
                    1 - {{$question->answers->first()->answer_1}}
                </p>
                <p class="@if($question->answers->first()->which_is_right == 2) text-success @endif">
                    2 - {{$question->answers->first()->answer_2}}
                </p>
                <p class="@if($question->answers->first()->which_is_right == 3) text-success @endif">
                    3 - {{$question->answers->first()->answer_3}}
                </p>
                <p class="@if($question->answers->first()->which_is_right == 5) text-success @endif">
                    4 - {{$question->answers->first()->answer_4}}
                </p>
            </div>
        </div>
    @endforeach
@endsection
