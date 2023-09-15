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
        Schema::create('vendors', function (Blueprint $table) {
	$table->id();
            $table->unsignedBigInteger('user_id')->unique();
            $table->string('business_name');
            $table->string('website')->nullable();
            $table->string('contact_email');
            $table->string('contact_phone');
            $table->json('service_zip_codes');
            $table->json('specialties')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');    

	});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
