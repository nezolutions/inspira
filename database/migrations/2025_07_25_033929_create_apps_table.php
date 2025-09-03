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
            $table->boolean('is_name_showed');
            $table->boolean('is_image_fit');
            $table->string('register')->nullable();
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
            $table->string('cover')->nullable();
            $table->mediumText('content');
            $table->string('highlights');
            $table->string('venue');
            $table->timestamps();
        });

        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->mediumText('description')->default('-');
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
            $table->longText('icon')->nullable();
            $table->string('title');
            $table->text('description');
            $table->enum('category', [
                'Researchers and Lecturers',
                'College/University Student',
                'High School Student'
            ]);
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
