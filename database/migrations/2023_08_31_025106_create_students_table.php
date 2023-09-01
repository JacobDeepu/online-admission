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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender', 20);
            $table->string('class', 20);
            $table->string('academic_year', 20);
            $table->string('nationality', 20);
            $table->date('date_of_birth');
            $table->string('date_of_birth_word');
            $table->string('place_of_birth');
            $table->string('religion');
            $table->string('caste');
            $table->string('social_category');
            $table->string('mother_tongue');
            $table->string('uid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
