<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::latest()->paginate(10);

        return view('forms.index', compact('forms'));
    }

    public function create()
    {
        return view('forms.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'form_name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Form::create([
            'name' => $request->form_name,
            'description' => $request->description,
        ]);

        return redirect()->route('forms.index')->with('message', 'Form created successfully.');
    }
}
