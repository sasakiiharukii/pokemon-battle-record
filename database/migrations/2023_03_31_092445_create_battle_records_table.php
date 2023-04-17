<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('battle_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('oponent_id')->constrained('users');
            $table->foreignId('party_id')->constrained('paties');
            $table->foreignId('oponent_party_id')->constrained('paties');
            $table->foreignId('selected_pokemon1_id')->constrained('pokemons');
            $table->foreignId('selected_pokemon2_id')->constrained('pokemons');
            $table->foreignId('selected_pokemon3_id')->constrained('pokemons');
            $table->foreignId('selected_pokemon1_item_id')->nullable()->constrained('items');
            $table->foreignId('selected_pokemon2_item_id')->nullable()->constrained('items');
            $table->foreignId('selected_pokemon3_item_id')->nullable()->constrained('items');
            $table->foreignId('oponent_selected_pokemon1_id')->constrained('pokemons');
            $table->foreignId('oponent_selected_pokemon2_id')->constrained('pokemons');
            $table->foreignId('oponent_selected_pokemon3_id')->constrained('pokemons');
            $table->foreignId('oponent_selected_pokemon1_item_id')->nullable()->constrained('items');
            $table->foreignId('oponent_selected_pokemon2_item_id')->nullable()->constrained('items');
            $table->foreignId('oponent_selected_pokemon3_item_id')->nullable()->constrained('items');
            $table->boolean('is_win');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('battle_records');
    }
};
