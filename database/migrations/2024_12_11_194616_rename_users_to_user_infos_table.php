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
        Schema::rename('users', 'user_infos');

        Schema::table('user_infos', function (Blueprint $table) {
            $table->dropColumn(['name', 'password', 'remember_token']);
            $table->string('email')->unique()->change();
            $table->string('phone_number')->nullable()->after('email_verified_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('user_infos', 'users');

        Schema::table('users', function (Blueprint $table) {
            $table->string('name');
            $table->string('password');
            $table->string('remember_token');
        });
    }
};
