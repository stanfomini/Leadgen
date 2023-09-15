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
        Schema::create('payments', function (Blueprint $table) {
		 $table->id();
            $table->unsignedBigInteger('vendor_id');
            $table->integer('lead_count');
            $table->decimal('lead_value', 8, 2);
            $table->decimal('total_amount', 8, 2);
            $table->date('week_start_date');
            $table->date('week_end_date');
            $table->date('payment_date');
            $table->boolean('is_paid')->default(false);
            $table->timestamps();

            $table->foreign('vendor_id')->references('id')->on('users')->onDelete('cascade');
        });     

	}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
