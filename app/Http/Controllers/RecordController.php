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
}
