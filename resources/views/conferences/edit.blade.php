@extends('layout.base')

<head>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>

@section('title', 'Conferences | Edit')

@section('content')

    <form method="POST" action="{{ route('conferences.update', $conference->id) }}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
        @include('partials.form')

        <input type="submit" value="Update">
    </form>

@endsection