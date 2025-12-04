@extends('layout.base')

<head>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

@section('title', 'Conferences | Log in')

@section('content')

    <form method="POST" action="{{ route('auth.login') }}" >
        @csrf
        <label for="name">Username</label>
        <input type="text" name="name" required>

        <label for="password">Password</label>
        <input type="password" name="password" required>

        <input type="submit" value="Log in">
    
    </form>

@endsection