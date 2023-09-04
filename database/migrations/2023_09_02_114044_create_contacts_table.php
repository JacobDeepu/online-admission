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
            $table->string('primary_number', 10);
            $table->string('secondary_number', 10)->nullable();
            $table->string('house_name');
            $table->string('road');
            $table->string('street');
            $table->string('area');
            $table->string('city');
            $table->string('post_office');
            $table->string('pin_code', 6);
            $table->string('permanent_house_name');
            $table->string('permanent_road');
            $table->string('permanent_street');
            $table->string('permanent_area');
            $table->string('permanent_city');
            $table->string('permanent_post_office');
            $table->string('permanent_pin_code', 6);
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
