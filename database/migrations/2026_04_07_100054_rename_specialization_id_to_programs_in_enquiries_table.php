<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('enquiries', function (Blueprint $table) {
            // Only add if column doesn't exist
            if (!Schema::hasColumn('enquiries', 'program_id')) {
                $table->foreignId('program_id')->nullable()->constrained('programs')->onDelete('cascade');
            }
        });
    }

    public function down(): void
    {
        Schema::table('enquiries', function (Blueprint $table) {
            if (Schema::hasColumn('enquiries', 'program_id')) {
                $table->dropForeign(['program_id']);
                $table->dropColumn('program_id');
            }
        });
    }
};