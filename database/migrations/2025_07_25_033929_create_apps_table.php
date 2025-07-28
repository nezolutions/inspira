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
        Schema::create('apps', function (Blueprint $table) {
            $table->id();
            $table->string('app_icon')->nullable();
            $table->string('app_name');
            $table->string('university');
            $table->string('app_link')->nullable();
            $table->year('app_version');
            $table->timestamps();
        });

        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('background')->nullable();
            $table->string('title');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->text('content');
            $table->timestamps();
        });

        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->string('roundown');
            $table->string('prefix_date')->nullable();
            $table->string('suffix_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apps');
        Schema::dropIfExists('homes');
        Schema::dropIfExists('abouts');
    }
};
