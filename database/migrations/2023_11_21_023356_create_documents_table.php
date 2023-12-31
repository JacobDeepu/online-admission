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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registration_id')
                ->cascadeOnDelete()
                ->constrained();
            $table->string('photo');
            $table->string('birth_certificate');
            $table->string('aadhaar');
            $table->string('address_proof')->nullable();
            $table->string('immunization');
            $table->string('tc')->nullable();
            $table->string('mark_list')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
