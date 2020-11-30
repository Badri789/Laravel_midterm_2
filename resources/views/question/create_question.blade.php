@extends('layout.layout')

@section('title')
    <title>Create Question</title>
@endsection

@section('content')
    <form method="post" enctype="multipart/form-data" action="{{route('questions.save')}}"
          style="width: 40%; margin: 3% auto;">
        <h3>Create Question</h3>
        <div class="box-body">
            <div class="form-group">
                <label for="questionBody">Question Body</label>
                <textarea id="questionBody" class="form-control @error('body') is-invalid @enderror"
                          placeholder="Enter question body" name="body"></textarea>
                @error('body')
                <p class="text-danger mt-2">{{$errors->first('body')}}..</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="answer1">First Answer</label>
                <input id="answer1" type="text" class="form-control"
                       placeholder="Enter first answer" name="first_answer">
            </div>
            <div class="form-group">
                <label for="answer2">Second Answer</label>
                <input id="answer2" type="text" class="form-control"
                       placeholder="Enter second answer" name="second_answer">
            </div>
            <div class="form-group">
                <label for="answer3">Third Answer</label>
                <input id="answer3" type="text" class="form-control"
                       placeholder="Enter third answer" name="third_answer">
            </div>
            <div class="form-group">
                <label for="answer4">Fourth Answer</label>
                <input id="answer4" type="text" class="form-control"
                       placeholder="Enter fourth answer" name="fourth_answer">
            </div>
        </div>
        <fieldset class="form-group">
            <legend>Set correct answer</legend>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="right_answer"
                           id="optionsRadios1" value="first_answer" checked="">
                    The First Answer
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="right_answer" id="optionsRadios2"
                           value="second_answer">
                    The Second Answer
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="right_answer" id="optionsRadios3"
                           value="third_answer">
                    The Third answer
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="right_answer" id="optionsRadios4"
                           value="fourth_answer">
                    The Fourth Answer
                </label>
            </div>
        </fieldset>
        <input type="hidden" name="_token" id='csrf_toKen' value="{{ csrf_toKen() }}">
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
@endsection


