@extends('layout/layout')

@section('title')
    <title>Login</title>
@endsection

@section('content')

    <form method="post" action="{{route('post.login')}}" style="width: 40%; margin: 3% auto">
        @csrf
        <h3>Login</h3>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror"
                   id="username" name="name" placeholder="Enter username">
            @error('name')
            <p class="text-danger mt-2">{{$errors->first('name')}}..</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror"
                   id="password" name="password" placeholder="Enter password">
            @error('password')
            <p class="text-danger mt-2">{{$errors->first('password')}}..</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Login</button>
    </form>
@endsection
