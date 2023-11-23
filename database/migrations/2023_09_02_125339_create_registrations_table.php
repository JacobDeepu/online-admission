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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')
                ->cascadeOnDelete()
                ->constrained();
            $table->foreignId('contact_id')
                ->cascadeOnDelete()
                ->constrained();
            $table->string('class')->nullable();
            $table->integer('section');
            $table->string('academic_year')->nullable();
            $table->string('previous_institution')->nullable();
            $table->string('siblings')->nullable();
            $table->string('distance')->nullable();
            $table->string('break')->nullable();
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
