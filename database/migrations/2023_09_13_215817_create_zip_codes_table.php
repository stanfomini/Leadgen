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
        Schema::create('zip_codes', function (Blueprint $table) {
     
	 $table->id();
            $table->unsignedBigInteger('vendor_id');
            $table->string('zip_code');
            $table->timestamps();

            $table->foreign('vendor_id')->references('id')->on('users')->onDelete('cascade');
        });

	}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zip_codes');
    }
};
