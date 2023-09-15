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
        Schema::create('quotes', function (Blueprint $table) {
 
		$table->id();
            $table->unsignedBigInteger('job_id');
		$table->unsignedBigInteger('vendor_id');
		$table->unsignedBigInteger('customer_id');
            $table->text('description');
            $table->json('items');
            $table->decimal('total_price', 10, 2);
            $table->string('status')->default('pending');
            $table->timestamps();

            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
	    $table->foreign('vendor_id')->references('id')->on('users')->onDelete('cascade');
	    $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade');

	});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
