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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->text('excerpt');
            $table->text('description')->nullable();
            $table->string('image');
            $table->integer('price');
            $table->text('facility')->nullable();
            $table->text('jadwal')->nullable();
            $table->integer('meet');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('link');
            $table->char('status', 1)->default(0)->comment('0: draft, 1: Active, 9: Arsip');
            $table->timestamp('event_start')->nullable();
            $table->timestamp('event_end')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamp('published_end')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
