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
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->text('overview_photos');
            $table->text('what_we_do_1_photos');
            $table->text('what_we_do_2_photos');
            $table->text('what_we_do_3_photos');
            $table->text('what_we_do_4_photos');
            $table->text('what_we_do_5_photos');
            $table->text('what_we_do_6_photos');
            $table->text('team_1_photos');
            $table->text('team_2_photos');
            $table->text('team_3_photos');
            $table->text('team_4_photos');
            $table->text('team_5_photos');
            $table->text('team_6_photos');
            $table->text('team_7_photos');
            $table->text('team_8_photos');
            $table->text('services_1_photos');
            $table->text('services_2_photos');
            $table->text('services_3_photos');
            $table->text('services_4_photos');
            $table->text('services_5_photos');
            $table->text('services_6_photos');
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
