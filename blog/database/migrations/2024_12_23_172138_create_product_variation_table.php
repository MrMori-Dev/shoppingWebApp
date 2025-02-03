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
        Schema::create('product_variation', function (Blueprint $table) {
            $table->id();
            $table->string('product_id');
            $table->string('product_attribute_id');
            $table->string('variation');
            $table->string('price');
            $table->string('description');
            $table->string('quantity');
            $table->integer('available')->default(0);
            $table->string('sale_price');
            $table->date('date_on_sale_from');
            $table->date('date_on_sale_to');
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
        Schema::dropIfExists('product_price');
    }
};
