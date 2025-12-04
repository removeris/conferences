@extends('layout.base')

<head>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

@section('title', 'Conferences | About')

@section('content')

    <h1>About This Project</h1>

    <p>
        This platform is a simple conference and event publishing system.
        It allows administrators to create, edit, and manage technical
        conferences and public events in a clean and accessible way.
    </p>

    <p>
        Visitors can browse upcoming conferences, view event details,
        and stay informed about what is happening next.
    </p>

@endsection
