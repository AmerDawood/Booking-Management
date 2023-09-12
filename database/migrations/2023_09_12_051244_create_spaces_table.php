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
        Schema::create('spaces', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name or title of the room/space
            $table->text('description'); // Description of the room/space
            // $table->decimal('price', 10, 2); // Price or rate for booking
            $table->integer('capacity'); // Maximum capacity of the room/space
            $table->string('image_url'); // URL or path to an image representing the room/space
            $table->json('amenities'); // JSON column for amenities
            $table->boolean('is_available'); // Boolean flag indicating availability
            $table->foreignId('place_id')->nullable()->constrained('places','id')->cascadeOnDelete(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spaces');
    }
};
