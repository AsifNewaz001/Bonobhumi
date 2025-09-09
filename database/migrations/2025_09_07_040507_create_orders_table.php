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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mobile');
            $table->text('address');
            $table->enum('package', ['single', 'bundle']);
            $table->enum('delivery_area', ['dhaka', 'outside']);
            $table->decimal('total', 10, 2);
            $table->enum('status', ['pending', 'confirmed', 'processing', 'delivered', 'cancelled'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
