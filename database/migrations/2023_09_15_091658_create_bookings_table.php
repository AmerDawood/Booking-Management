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
            $table->foreignId('space_id')->nullable()->constrained('spaces','id')->cascadeOnDelete(); // Foreign Key to room/space
            $table->foreignId('user_id')->constrained('users','id')->cascadeOnDelete(); // Foreign Key to user
            $table->dateTime('start_date'); // Start date and time of the booking
            $table->dateTime('end_date'); // End date and time of the booking
            // $table->decimal('total_price', 10, 2); // Total price of the booking
            $table->integer('guest_count'); // Number of guests for the booking
            $table->string('contact_name'); // Name of the primary contact person
            $table->string('contact_email'); // Email address of the primary contact person
            $table->string('contact_phone'); // Phone number of the primary contact person
            $table->text('special_requests')->nullable(); // Special requests or notes (optional)
            $table->enum('status', ['pending', 'approved', 'rejected']); // Status of the request
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
