<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conference;

class ConferenceController extends Controller
{
    public function index(Request $request) {
        $conferences = Conference::all();

        return view('conferences.index', ['conferences' => $conferences]);
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

    public function update(Request $request, string $id){
        $validated = $request->validate([
            'title'       => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'date'        => ['required', 'date'],
            'address'     => ['nullable', 'string', 'max:255'],
        ]);

        $conference = Conference::find($id);
        $conference->update($validated);

        return redirect()->route('conferences.index')->
               with('success', 'Conference created successfully.');
    }

    public function store(Request $request){
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

    public function delete(string $id){
    $conference = Conference::findOrFail($id);
    $conference->delete();

    return redirect()
        ->route('conferences.index')
        ->with('success', 'Conference deleted successfully.');
    }
}
