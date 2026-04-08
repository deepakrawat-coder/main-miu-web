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
        Schema::table('programs', function (Blueprint $table) {
            $table->string('program_course_name')->after('id')->nullable();
            $table->string('duration')->after('program_course_name')->nullable();
            $table->text('eligibility')->after('duration')->nullable();
            $table->longText('content')->after('eligibility')->nullable();
            $table->string('slug')->after('content')->unique()->nullable();
            $table->unsignedBigInteger('category_id')->after('slug')->nullable();
            $table->unsignedBigInteger('school_id')->after('category_id')->nullable();

            // Add foreign key constraints
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('set null');

            $table->foreign('school_id')
                ->references('id')
                ->on('schools')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('programs', function (Blueprint $table) {

            // ✅ First drop foreign keys (SAFE WAY)
            try {
                $table->dropForeign(['category_id']);
            } catch (\Exception $e) {
            }

            try {
                $table->dropForeign(['school_id']);
            } catch (\Exception $e) {
            }

            // ✅ Then drop columns
            $table->dropColumn([
                'program_course_name',
                'duration',
                'eligibility',
                'content',
                'slug',
                'category_id',
                'school_id'
            ]);
        });
    }
};
