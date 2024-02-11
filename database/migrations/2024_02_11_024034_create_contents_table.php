<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained();
            $table->foreignId('author_id')->references('id')->on('users')->cascadeOnDelete();
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->string('thumbnail');
            $table->text('content');
            $table->enum('status', ['draft', 'published', 'hidden'])->default('draft');
            $table->timestamp('published_at')->nullable();
            $table->boolean("is_allowed_comment")->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
