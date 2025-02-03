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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('f_name');
            $table->string('l_name');
            $table->string('user_name');
            $table->string('password');
            $table->string('national_code');
            $table->enum('sex',['male','female',null])->nullable();
            $table->date('birthday')->nullable();
            $table->enum('type',['individuals','legal'])->nullable();
            $table->string('avatar');
            $table->string('provider_name');
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
