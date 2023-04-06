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
        Schema::create('paties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pokemon1_id')->constrained('pokemons');
            $table->foreignId('pokemon2_id')->constrained('pokemons');
            $table->foreignId('pokemon3_id')->constrained('pokemons');
            $table->foreignId('pokemon4_id')->constrained('pokemons');
            $table->foreignId('pokemon5_id')->constrained('pokemons');
            $table->foreignId('pokemon6_id')->constrained('pokemons');
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
        Schema::dropIfExists('paties');
    }
};
