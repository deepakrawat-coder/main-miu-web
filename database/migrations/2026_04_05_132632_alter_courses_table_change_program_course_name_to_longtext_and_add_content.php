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
            // Change program_course_name from string to longText (nullable)
            $table->longText('program_course_name')->nullable()->change();
             $table->longText('content')->nullable()->change();           
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            // Revert program_course_name back to string (nullable)
            $table->string('program_course_name')->nullable()->change();
            
            // Drop the content column
            $table->dropColumn('content');
        });
    }
};