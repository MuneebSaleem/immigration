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
        Schema::create('apps_countries_detailed', function (Blueprint $table) {
            $table->id();
            $table->char('countryCode', 2)->default('');
            $table->string('countryName', 100)->default('');
            $table->char('currencyCode', 3)->nullable();
            $table->char('fipsCode', 2)->nullable();
            $table->char('isoNumeric', 4)->nullable();
            $table->string('north', 30)->nullable();
            $table->string('south', 30)->nullable();
            $table->string('east', 30)->nullable();
            $table->string('west', 30)->nullable();
            $table->string('capital', 100)->nullable();
            $table->string('continentName', 100)->nullable();
            $table->char('continent', 2)->nullable();
            $table->string('languages', 100)->nullable();
            $table->char('isoAlpha3', 3)->nullable();
            $table->bigInteger('geonameId')->nullable();
            $table->string('telephonePrefix', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apps_countries_detailed');
    }
};
