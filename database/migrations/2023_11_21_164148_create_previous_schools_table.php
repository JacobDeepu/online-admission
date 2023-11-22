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
        Schema::create('previous_schools', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registration_id')
                ->cascadeOnDelete()
                ->constrained();
            $table->string('name')->nullable();
            $table->string('city')->nullable();
            $table->string('year')->nullable();
            $table->string('class')->nullable();
            $table->string('syllabus')->nullable();
            $table->string('reason')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('previous_schools');
    }
};
