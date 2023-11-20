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
            $table->uuid('id')->primary();
            $table->string('name')->nullable();
            $table->string('nik')->unique();
            $table->string('email')->nullable();
            $table->string('mobile_phone')->unique();
            $table->boolean('mobile_phone_has_whatsapp');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('no_hp_verified_at')->nullable();
            $table->string('password');
            $table->boolean('account_status')->default(TRUE);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
