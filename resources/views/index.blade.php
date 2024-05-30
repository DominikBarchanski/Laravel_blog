@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Welcome to My Blog</h1>
        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
        <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
        <a href="{{ route('posts.index') }}" class="btn btn-primary">View Blog Posts</a>
    </div>
@endsection
