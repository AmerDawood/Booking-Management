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
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name or title of the location
            $table->string('address'); // Address of the location
            $table->string('city'); // City where the location is situated
            $table->string('state'); // State or region where the location is located
            $table->string('zip_code'); // ZIP code of the location
            $table->string('country'); // Country where the location is situated
            $table->decimal('latitude', 10, 7)->nullable(); // Geographic coordinates for mapping (latitude)
            $table->decimal('longitude', 10, 7)->nullable(); // Geographic coordinates for mapping (longitude)
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('places');
    }
};
