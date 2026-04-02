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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('subtitle');
            $table->text('message');
            $table->string('image')->nullable();
            $table->integer('rating')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('company')->nullable();
            $table->string('package')->nullable();
            $table->string('passing_year')->nullable();
            $table->enum('page_type', ['home', 'school', 'school-details', 'specialization-details'])->default('home');
            $table->unsignedBigInteger('school_id')->nullable();
            $table->unsignedBigInteger('specialization_id')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
