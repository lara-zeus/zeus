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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index();
            $table->string('title');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->text('content');
            $table->string('featured_image')->nullable();
            $table->string('post_type')->default('post');
            $table->integer('parent_id')->nullable();
            $table->integer('ordering')->default(1);
            $table->string('password')->nullable();
            $table->string('status')->default('publish');
            $table->dateTime('sticky_until')->nullable();
            $table->dateTime('published_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
