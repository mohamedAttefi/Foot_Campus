<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('game_plays', function (Blueprint $table) {
            $table->id();
            $table->foreignId('home_team_id')->constrained('teams');
            $table->foreignId('away_team_id')->constrained('teams');
            $table->foreignId('season_id')->constrained();
            $table->date('date');
            $table->time('time');
            $table->string('location');
            $table->enum('status', ['scheduled', 'live', 'finished'])->default('scheduled');
            $table->integer('home_score')->default(0);
            $table->integer('away_score')->default(0);
            $table->boolean('validated_by_admin')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_plays');
    }
};
