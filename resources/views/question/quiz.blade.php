@extends('layout.layout')

@section('title')
    <title>All Questions</title>
@endsection

@section('content')
    <form enctype="multipart/form-data" action="{{route('quiz.result')}}">
        @foreach($questions as $idx=>$question)
            <div style="width: 50%; margin: 0 auto;" class="card mt-4">
                <div class="card-body">
                    <p class="card-text">{{$question->body}}</p>
                    Choose the answers:
                    <fieldset class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="{{$question->id}}"
                                       id="optionsRadios1" value="1" checked="">
                                {{$question->answers->first()->answer_1}}
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="{{$question->id}}" id="optionsRadios2"
                                       value="2">
                                {{$question->answers->first()->answer_2}}
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="{{$question->id}}" id="optionsRadios3"
                                       value="3">
                                {{$question->answers->first()->answer_3}}
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="{{$question->id}}" id="optionsRadios4"
                                       value="4">
                                {{$question->answers->first()->answer_4}}
                            </label>
                        </div>
                    </fieldset>
                </div>
            </div>
        @endforeach
        <input type="hidden" name="_token" id='csrf_toKen' value="{{ csrf_toKen() }}">
        <div class="box-footer" style="margin: 0 auto">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
