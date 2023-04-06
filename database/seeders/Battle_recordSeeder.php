<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class Battle_recordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('battle_records')->insert([
            'user_id' => '1',
            'oponent_id' => '2',
            'party_id' => '1',
            'selected_pokemon1_id' => '1',
            'selected_pokemon2_id' => '2',
            'selected_pokemon3_id' => '3',
            'oponent_selected_pokemon1_id' => '4',
            'oponent_selected_pokemon2_id' => '5',
            'oponent_selected_pokemon3_id' => '6',
            'is_win' => '1',
            'now' => new DateTime(),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
