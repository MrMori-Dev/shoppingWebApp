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
        Schema::create('address', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('floor_number');
            $table->string('unit_number');
            $table->string('street_number');
            $table->string('address_line_1');
            $table->string('address_line_2');
            $table->string('city');
            $table->string('provinces');
            $table->string('region');
            $table->string('country');
            $table->string('postal_code')->nullable();
            $table->string('longitude');
            $table->string('latitude');
            $table->string('description');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('address');
    }
};
