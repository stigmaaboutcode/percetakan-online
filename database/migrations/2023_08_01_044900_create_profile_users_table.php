<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void{
        Schema::create('profile_users', function (Blueprint $table) {
            $table->string('username')->primary();
            $table->text('photo_profile')->default('none');
            $table->string('first_name');
            $table->string('second_name');
            $table->string('contact');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void{
        Schema::dropIfExists('profile_users');
    }
};
