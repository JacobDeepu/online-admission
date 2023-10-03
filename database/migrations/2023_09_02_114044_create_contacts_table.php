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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('primary_number', 20);
            $table->string('secondary_number', 20)->nullable();
            $table->string('house_name')->nullable();
            $table->string('street')->nullable();
            $table->string('post_office')->nullable();
            $table->string('pin_code', 6)->nullable();
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('state')->nullable();
            $table->string('permanent_house_name')->nullable();
            $table->string('permanent_street')->nullable();
            $table->string('permanent_post_office')->nullable();
            $table->string('permanent_pin_code', 6)->nullable();
            $table->string('permanent_city')->nullable();
            $table->string('permanent_district')->nullable();
            $table->string('permanent_state')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
