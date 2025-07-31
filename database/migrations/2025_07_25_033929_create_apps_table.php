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
            $table->integer('app_version');
            $table->timestamps();
        });

        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('background')->nullable();
            $table->text('title');
            $table->text('description');
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
            $table->string('agenda')->default('-');
            $table->string('prefix_date')->nullable();
            $table->string('suffix_date')->nullable();
            $table->text('description')->default('-');
            $table->integer('order')->nullable()->unique();
            $table->timestamps();
        });

        Schema::create('fees', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('online_fee');
            $table->string('on_fee_type');
            $table->integer('offline_fee');
            $table->string('off_fee_type');
            $table->integer('order')->nullable()->unique();
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
