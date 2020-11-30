@extends('layout.layout')

@section('title')
    <title>Quiz Result</title>
@endsection

@section('content')
    <h1>Your result is {{$user_points}}/{{$total}}</h1>
@endsection
