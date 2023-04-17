<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Battle_record;

class RecordController extends Controller
{
    public function index(Battle_record $battle_record)
    {
        return view('battle_records/index')->with(['battle_records' => $battle_record ->get()]);
    }
    
    public function show(Battle_record $record)
    {
        return view('battle_records/show')->with(['battle_record' => $record]);
    }
    
    public function create()
    {
        return view('battle_records/create');
    }
    public function store(Request $request, Battle_record $battle_record)
    {
        $input = $request->all();
        $battle_record->fill($input);
        $battle_record->user_id=1;
        $battle_record->oponent_id=2;
        $battle_record->party_id=1;
        $battle_record->oponent_party_id=1;
        $battle_record->selected_pokemon1_id=1;
        $battle_record->selected_pokemon2_id=2;
        $battle_record->selected_pokemon3_id=3;
        $battle_record->oponent_selected_pokemon1_id=4;
        $battle_record->oponent_selected_pokemon2_id=5;
        $battle_record->oponent_selected_pokemon3_id=6;
        $battle_record->is_win=1;
        $battle_record->save();
        return redirect('/');
    }
}
