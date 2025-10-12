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
        Schema::create('login_attempts', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address', 45);
            $table->string('email')->nullable();
            $table->integer('attempts')->default(1);
            $table->timestamp('last_attempt_at');
            $table->timestamp('locked_until')->nullable();
            $table->index(['ip_address', 'email']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('login_attempts');
    }
};
