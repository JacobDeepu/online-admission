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
        Schema::create('parent_details', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nationality')->nullable();
            $table->string('qualification')->nullable();
            $table->string('occupation')->nullable();
            $table->string('annual_income')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('email')->nullable();
            $table->string('relationship');
            $table->foreignId('student_id')
                ->cascadeOnDelete()
                ->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parent_details');
    }
};
