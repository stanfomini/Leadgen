<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
      

	/**
     * Run the migrations.
     */
	public function up()
{
    Schema::create('jobs', function (Blueprint $table) {
	    $table->engine = 'InnoDB';
	    $table->id();
        $table->unsignedBigInteger('customer_id');
        $table->unsignedBigInteger('vendor_id')->nullable();
        $table->unsignedBigInteger('specialty_id');
        $table->text('description');
        $table->string('image_path')->nullable(); // For storing image paths
        $table->string('address');
        $table->date('requested_start_date');
        $table->timestamps();

        $table->foreign('customer_id')->references('id')->on('users');
        $table->foreign('vendor_id')->references('id')->on('users');
        $table->foreign('specialty_id')->references('id')->on('specialties');
    });
}

public function down()
{
    Schema::dropIfExists('jobs');
}

};
