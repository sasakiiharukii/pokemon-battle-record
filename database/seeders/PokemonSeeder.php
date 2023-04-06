<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pokemons')->insert([
            'item_id' => '1',
            'pokemon_name' => 'パオジアン',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
         DB::table('pokemons')->insert([
            'item_id' => '2',
            'pokemon_name' => 'イーユイ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
         DB::table('pokemons')->insert([
            'item_id' => '3',
            'pokemon_name' => 'ハバタクカミ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
         DB::table('pokemons')->insert([
            'item_id' => '4',
            'pokemon_name' => 'ルカリオ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
         DB::table('pokemons')->insert([
            'item_id' => '5',
            'pokemon_name' => 'チオンジェン',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
         DB::table('pokemons')->insert([
            'item_id' => '6',
            'pokemon_name' => 'ドヒドイデ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
