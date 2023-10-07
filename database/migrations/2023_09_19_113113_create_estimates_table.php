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
        Schema::create('estimates', function (Blueprint $table) {
            $table->id();
            $table->string('payment');
            $table->string('validity');
            $table->string('attachments');
            $table->string('supervisor_fee');
            $table->string('traveling_fee');
            $table->string('other_fee');
            $table->string('other_fee_remarks');
            $table->string('total_fee');
            $table->string('remarks');
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estimates');
    }
};
