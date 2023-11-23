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
            $table->date('date_of_birth');
            $table->string('religion', 20)->nullable();
            $table->string('caste')->nullable();
            $table->string('social_category', 20)->nullable();
            $table->string('uid', 20)->nullable();
            $table->string('blood_group', 10)->nullable();
            $table->string('disability', 5)->nullable();
            $table->string('disability_details')->nullable();
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
