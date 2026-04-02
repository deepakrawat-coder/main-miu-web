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
        Schema::table('courses', function (Blueprint $table) {
            $table->string('duration')->nullable()->after('name');
            $table->text('eligibility')->nullable()->after('duration');
            $table->longText('content')->nullable()->after('eligibility');
            $table->string('slug')->nullable()->unique()->after('content');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn(['duration', 'eligibility', 'content', 'slug']);
        });
    }
};
