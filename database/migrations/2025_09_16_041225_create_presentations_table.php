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
        Schema::create('points', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->string('section');
            $table->string('content');
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        Schema::create('formats', function (Blueprint $table) {
            $table->id();
            $table->string('document')->default('-');
            $table->string('content')->default('-');
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropAllTables();
    }
};
