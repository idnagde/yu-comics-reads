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
        Schema::create('novel_chapters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('novel_id')->constrained()->onDelete('cascade');
            $table->integer('chapter_number');
            $table->string('title');
            $table->text('content');
            $table->timestamps();

            $table->unique(['novel_id', 'chapter_number']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('novel_chapters');
    }
};