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
        Schema::create('texts', function (Blueprint $table) {
            $table->id();
            $table->text('overview');
            $table->text('what_we_do_1');
            $table->text('what_we_do_2');
            $table->text('what_we_do_3');
            $table->text('what_we_do_4');
            $table->text('what_we_do_5');
            $table->text('what_we_do_6');
            $table->integer('prices_1');
            $table->integer('prices_2');
            $table->integer('prices_3');
            $table->integer('prices_4');
            $table->integer('prices_5');
            $table->integer('prices_6');
            $table->integer('price_1');
            $table->integer('price_2');
            $table->integer('price_3');
            $table->integer('price_4');
            $table->integer('price_5');
            $table->integer('price_6');
            $table->text('team_1');
            $table->text('team_2');
            $table->text('team_3');
            $table->text('team_4');
            $table->text('team_5');
            $table->text('team_6');
            $table->text('team_7');
            $table->text('team_8');
            $table->text('services_1');
            $table->text('services_2');
            $table->text('services_3');
            $table->text('services_4');
            $table->text('services_5');
            $table->text('services_6');
            $table->text('contact_email_1');
            $table->text('contact_email_2');
            $table->text('contact_phone_1');
            $table->text('contact_phone_2');
            $table->text('contact_location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('texts');
    }
};
