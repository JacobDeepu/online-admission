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
        Schema::create('response_values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('response_id')->constrained('form_responses')->onDelete('cascade');
            $table->foreignId('field_id')->constrained('form_fields')->onDelete('cascade');
            $table->text('field_value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('response_values');
    }
};
