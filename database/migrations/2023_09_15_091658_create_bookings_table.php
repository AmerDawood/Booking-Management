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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('space_id')->nullable()->constrained('spaces','id')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users','id')->cascadeOnDelete();
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->integer('guest_count');
            $table->string('contact_phone');
            $table->text('special_requests')->nullable(); // Special requests or notes (optional)
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending'); // Status of the request
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
