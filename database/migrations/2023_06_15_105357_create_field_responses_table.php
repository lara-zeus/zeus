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
        Schema::create('field_responses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('form_id')->constrained('forms');
            $table->foreignId('field_id')->constrained('fields');
            $table->foreignId('response_id')->constrained('responses');
            $table->longText('response');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('field_responses');
    }
};
