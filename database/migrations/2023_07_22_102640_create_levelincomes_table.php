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
        // Schema::create('levelincomes', function (Blueprint $table) {
        //     $table->id();            
        //     $table->string('reference_id');
        //     $table->string('level_person_id');
        //     $table->string('level_profit');
        //     $table->string('tl_profit');
        //     $table->string('level');
        //     $table->string('date');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('levelincomes');
    }
};
