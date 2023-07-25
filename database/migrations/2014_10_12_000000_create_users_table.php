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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('ut_id');
            $table->string('phone')->unique();
            $table->string('fullname');
            $table->string('image');
            $table->integer('ro_id');
            $table->string('address');
            $table->string('Occupation_id');
            $table->string('Gender_id');
            $table->string('NIC')->unique();
            $table->string('Department_id');
            $table->date('dateJoined');
            $table->string('employment_type');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
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
