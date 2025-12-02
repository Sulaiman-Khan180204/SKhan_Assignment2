<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;


class PlayerController extends Controller
{

    function index(Request $request)
    {
    $search = $request->input('search');

    $players = Player::when($search, function ($query, $search) {
        return $query->where('name', 'like', "%{$search}%")
                     ->orWhere('position', 'like', "%{$search}%")
                     ->orWhere('nationality', 'like', "%{$search}%");
    })
    ->orderBy('name')
    ->paginate(8);

    return view('players.index', [
        'players' => $players
    ]);
    }


     


    function store(Request $request)
    {
       
        $data = $request->validate([
            'name'        => 'required|max:255',
            'position'    => 'required|max:50',
            'number'      => 'required|integer|min:1|max:99',
            'nationality' => 'required|max:100',
            'appearances' => 'required|integer|min:0',
            'goals'       => 'required|integer|min:0',
        ],

        [
            'name.required' => 'Player name is required',
            'name.max'      => 'Player name cannot be more than 200 characters',

            'position.required' => 'Position is required',
            'position.max'      => 'Position cannot be more than 50 characters',

            'number.required' => 'Squad number is required',
            'number.max'      => 'Squad number cannot be more than 99',
            'number.min'      => 'Squad number must be at least 1',
            'number.integer'  => 'Squad number must be a whole number.',

            'nationality.required' => 'Player nationality is required',
            'nationality.max'      => 'Player nationality cannot be more than 100 characters',

            'appearances.required' => 'Appearances is required',
            'appearances.min'      => 'Appearances cannot be more below 0.',
            'appearances.integer'  => 'Appearances number must be a whole number.',

            'goals.required' => 'Goals are required',
            'goals.integer'  => 'Goals number must be a whole number.',
            'goals.min'      => 'Goals cannot be below 0.'



        ]

        );


        
        Player::create($data);

        return redirect('/players');
    }

    function show($id)
    {
        $player = Player::find($id);
        return view('players.show', ['player' => $player]);
    }

    function edit($id)
    {
        $player = Player::find($id);
        return view('players.edit', ['player' => $player]);
    }

    function update(Request $request, $id)
    {
        
        $data = $request->validate([
            'name'        => 'required|max:200',
            'position'    => 'required|max:50',
            'number'      => 'required|integer|min:1|max:99',
            'nationality' => 'required|max:100',
            'appearances' => 'required|integer|min:0',
            'goals'       => 'required|integer|min:0',
        ],

        [
            'name.required' => 'Player name is required',
            'name.max'      => 'Player name cannot be more than 200 characters',

            'position.required' => 'Position is required',
            'position.max'      => 'Position cannot be more than 50 characters',

            'number.required' => 'Squad number is required',
            'number.max'      => 'Squad number cannot be more than 99',
            'number.min'      => 'Squad number must be at least 1',
            'number.integer'  => 'Squad number must be a whole number.',

            'nationality.required' => 'Player nationality is required',
            'nationality.max'      => 'Player nationality cannot be more than 100 characters',

            'appearances.required' => 'Appearances is required',
            'appearances.min'      => 'Appearances cannot be more below 0.',
            'appearances.integer'  => 'Appearances number must be a whole number.',

            'goals.required' => 'Goals are required',
            'goals.integer'  => 'Goals number must be a whole number.',
            'goals.min'      => 'Goals cannot be below 0.'



        ]

        );

        
        $player = Player::find($id);
        $player->update($data);

        return redirect('/players');
    }

    function destroy(Request $request)
    {
        $player = Player::find($request->id);
        $player->delete();
        return redirect('/players');
    }

    function about()
    {
        return view('players.about');
    }

    function create()
    {
    return view('players.create');
    }
}

