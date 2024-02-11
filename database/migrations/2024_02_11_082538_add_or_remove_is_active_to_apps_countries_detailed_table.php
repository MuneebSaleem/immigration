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
        Schema::table('apps_countries_detailed', function (Blueprint $table) {
            if (!Schema::hasColumn('apps_countries_detailed', 'is_active')) {
                $table->boolean('is_active')->default(0)->after('telephonePrefix');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('apps_countries_detailed', function (Blueprint $table) {
            $table->dropColumn('is_active');
        });
    }
};
