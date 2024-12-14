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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('f_name');
            $table->string('l_name');
            $table->string('user_name');
            $table->string('password');
            $table->string('country_code');
            $table->enum('sex',['male','female',null])->nullable();
            $table->date('birthday')->nullable();
            $table->enum('type',['individuals','legal'])->nullable();
            $table->enum('accessibility',['level1','level2','level3'])->default('level1');
            $table->timestamp('last_login_time');
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
        Schema::dropIfExists('user');
    }
};
