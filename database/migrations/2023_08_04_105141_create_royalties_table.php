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
        Schema::create('royalties', function (Blueprint $table) {
            $table->id();
            $table->string('business_amount');
            $table->string('days');
            $table->string('profit');
            $table->string('payment_deduct');
            $table->string('remarks', 1000)->nullable();
            $table->string('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('royalties');
    }
};
