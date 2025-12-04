@extends('layout.base')

@section('title', 'Conference | ' . $conference->title)

@section('content')

    <h1>{{ $conference->title }}</h1>

    <p>
        <a href="{{ route('conferences.index') }}">← Back to all conferences</a>
    </p>

    @if ($conference->date)
        <p>
            <strong>Date:</strong>
            {{ \Carbon\Carbon::parse($conference->date)->toFormattedDateString() }}
        </p>
    @endif

    @if ($conference->address)
        <p>
            <strong>Address:</strong>
            {{ $conference->address }}
        </p>
    @endif

    @if ($conference->description)
        <p>{{ $conference->description }}</p>
    @endif

    @auth
        <p>
            <form method="GET" action="{{ route('conferences.edit', $conference->id) }}" style="display: inline;">
                <button type="submit">Edit</button>
            </form>

            <form method="POST" action="{{ route('conferences.delete', $conference->id) }}" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this conference?');">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </p>
    @endauth

@endsection
