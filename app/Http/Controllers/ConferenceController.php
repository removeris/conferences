<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conference;

class ConferenceController extends Controller
{
    public function index(Request $request) {
        return view('conferences.index');
    }
    public function create(Request $request) {
        return view('conferences.create');
    }
    public function show(string $id) {
        $conference = Conference::find($id);

        return view('conferences.show', ['conference' => $conference]);
    }


    public function edit(string $id) {
        $conference = Conference::find($id);

        return view('conferences.edit', ['conference' => $conference]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'date'        => ['required', 'date'],
            'address'     => ['nullable', 'string', 'max:255'],
        ]);

        $conference = Conference::create($validated);

        return redirect()->route('conferences.index')->
               with('success', 'Conference created successfully.');
    }
}
