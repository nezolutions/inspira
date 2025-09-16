<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

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
            $table->boolean('is_fname_showed')->default(true);
            $table->boolean('is_lname_showed')->default(true);
            $table->boolean('is_image_fit')->default(false);
            $table->string('register')->nullable();
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
            $table->string('cover')->nullable();
            $table->text('content');
            $table->string('highlights');
            $table->string('venue');
            $table->timestamps();
        });

        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->text('description')->default('-');
            $table->string('agenda')->default('-');
            $table->string('timeline')->default('-');
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        Schema::create('topics', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('list');
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('icon')->nullable();
            $table->string('background')->nullable();
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        Schema::create('competitions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        Schema::create('awards', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->integer('online_prize');
            $table->integer('offline_prize');
            $table->integer('on_gold')->nullable();
            $table->integer('on_silver')->nullable();
            $table->integer('on_bronze')->nullable();
            $table->integer('off_gold')->nullable();
            $table->integer('off_silver')->nullable();
            $table->integer('off_bronze')->nullable();
            $table->enum('category', [
                'Researchers and Lecturers',
                'College Students 1',
                'College Students 2',
                'Highschool Students'
            ]);
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        Schema::create('fees', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('online_fee');
            $table->enum('on_fee_type', ['USD', 'IDR']);
            $table->integer('offline_fee');
            $table->enum('off_fee_type', ['USD', 'IDR']);
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
