<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\TripTypes;
use App\Enums\TripCitys;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->enum('trip_type', TripTypes::getEnumsArray())->default(TripTypes::CITY_TO_CITY);
            $table->enum('from', TripCitys::getEnumsArray());
            $table->enum('to', TripCitys::getEnumsArray());
            $table->unsignedBigInteger('bus_id');
            $table->foreign('bus_id')->references('id')->on('buses')->onUpdate('cascade');
            $table->decimal('trip_price', 15, 4);
            $table->time('trip_time');
            $table->date('trip_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
