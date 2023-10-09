<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('titles', function (Blueprint $table) {
            $table->id();
            $table->text('overview_title');
            $table->text('what_we_do_1_title');
            $table->text('what_we_do_2_title');
            $table->text('what_we_do_3_title');
            $table->text('what_we_do_4_title');
            $table->text('what_we_do_5_title');
            $table->text('what_we_do_6_title');
            $table->integer('prices_1_title');
            $table->integer('prices_2_title');
            $table->integer('prices_3_title');
            $table->integer('prices_4_title');
            $table->integer('prices_5_title');
            $table->integer('prices_6_title');
            $table->text('team_1_position');
            $table->text('team_2_position');
            $table->text('team_3_position');
            $table->text('team_4_position');
            $table->text('team_5_position');
            $table->text('team_6_position');
            $table->text('team_7_position');
            $table->text('team_8_position');
            $table->text('services_1_title');
            $table->text('services_2_title');
            $table->text('services_3_title');
            $table->text('services_4_title');
            $table->text('services_5_title');
            $table->text('services_6_title');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('titles');
    }
};
