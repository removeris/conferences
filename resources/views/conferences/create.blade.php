@extends('layout.base')

<head>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>

@section('title', 'Conferences | Create')

@section('content')

    <form method="POST" action="{{ route('conferences.store') }}" enctype="multipart/form-data">
    @csrf
        @include('partials.form')

        <input type="submit" value="Create">
    </form>

@endsection