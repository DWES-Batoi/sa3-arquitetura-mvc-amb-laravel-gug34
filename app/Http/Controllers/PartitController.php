<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PartitController extends Controller
{
    public $partits = [
        [
            'local' => 'Barça Femení',
            'visitant' => 'Atlètic de Madrid',
            'data' => '2024-11-30',
            'resultat' => null
        ],
        [
            'local' => 'Real Madrid Femení',
            'visitant' => 'Barça Femení',
            'data' => '2024-12-15',
            'resultat' => '0-3'
        ]
    ];

    public function index()
    {
        $partits = Session::get('partits', $this->partits);
        return view('partits.index', compact('partits'));
    }

    public function create()
    {
        return view('partits.create');
    }

    public function show($id)
    {
        $partits = Session::get('partits', $this->partits);

        abort_if(!isset($partits[$id]), 404);

        $partit = $partits[$id];

        return view('partits.show', compact('partit'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'local' => 'required|min:2',
            'visitant' => 'required|min:2|different:local',
            'data' => 'required|date',
            'resultat' => ['nullable', 'regex:/^\d+-\d+$/'],
        ], [
            'resultat.regex' => 'El format del resultat ha de ser "gols-gols" (ex: 2-1)',
            'visitant.different' => 'El equip visitant no pot ser el mateix que el local.',
        ]);

        $partits = Session::get('partits', $this->partits);
        $partits[] = $validated;
        Session::put('partits', $partits);

        return redirect()
            ->route('partits.index')
            ->with('success', 'Partit creat correctament!');
    }
}