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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users','id')->nullOnDelete(); // Foreign Key to user who left the review
            $table->foreignId('space_id')->constrained('spaces','id')->cascadeOnDelete(); // Foreign Key to the space being reviewed
            $table->unsignedTinyInteger('rating'); // Rating given by the user (e.g., 1-5 stars)
            $table->text('comment')->nullable(); // Review comment or text (optional)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
