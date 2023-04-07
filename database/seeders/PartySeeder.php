<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PartySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('paties')->insert([
            'pokemon1_id' => '1',
            'pokemon2_id' => '2',
            'pokemon3_id' => '3',
            'pokemon4_id' => '4',
            'pokemon5_id' => '5',
            'pokemon6_id' => '6',
            'pokemon1_item_id' => '1',
            'pokemon2_item_id' => '2',
            'pokemon3_item_id' => '3',
            'pokemon4_item_id' => '4',
            'pokemon5_item_id' => '5',
            'pokemon6_item_id' => '6',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
