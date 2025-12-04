@extends('layout.base')

<head>
    <link rel="stylesheet" href="{{ asset('css/conference-index.css') }}">
</head>

@section('title', 'Conferences | List')

@section('content')

    <h1>Conferences</h1>

    @auth
        <p class="create-button">
            <a href="{{ route('conferences.create') }}">Create new conference</a>
        </p>
    @endauth

    @if ($conferences->isEmpty())
        <p>No conferences found.</p>
    @else
        <ul>
            @foreach ($conferences as $conference)
                <li style="list-style: none;">
                    @include('partials.conference', ['conference' => $conference])
                </li>
            @endforeach
        </ul>
    @endif

@endsection