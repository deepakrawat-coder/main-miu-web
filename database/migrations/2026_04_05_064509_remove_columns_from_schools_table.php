<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveColumnsFromSchoolsTable extends Migration
{
    public function up()
    {
        Schema::table('schools', function (Blueprint $table) {
            $table->dropColumn(['icon', 'features', 'highlights', 'description']);
        });
    }

    public function down()
    {
        Schema::table('schools', function (Blueprint $table) {
            $table->string('icon')->nullable();
            $table->text('features')->nullable();
            $table->text('highlights')->nullable();
            $table->text('description')->nullable();
        });
    }
}
