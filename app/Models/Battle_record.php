<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Battle_record extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'oponent_id',
        'party_id',
        'oponent_party_id',
        'selected_pokemon1_id',
        'selected_pokemon2_id',
        'selected_pokemon3_id',
        'selected_pokemon1_item_id',
        'selected_pokemon2_item_id',
        'selected_pokemon3_item_id',
        'oponent_selected_pokemon1_id',
        'oponent_selected_pokemon2_id',
        'oponent_selected_pokemon3_id',
        'oponent_selected_pokemon1_item_id',
        'oponent_selected_pokemon2_item_id',
        'oponent_selected_pokemon3_item_id',
        'is_win',
        ];
}
