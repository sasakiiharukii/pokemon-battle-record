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
            'pokemon_name' => 'パオジアン',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
         DB::table('pokemons')->insert([
            'pokemon_name' => 'イーユイ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
         DB::table('pokemons')->insert([
            'pokemon_name' => 'ハバタクカミ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
         DB::table('pokemons')->insert([
            'pokemon_name' => 'ルカリオ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
         DB::table('pokemons')->insert([
            'pokemon_name' => 'チオンジェン',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
         DB::table('pokemons')->insert([
            'pokemon_name' => 'ドヒドイデ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
