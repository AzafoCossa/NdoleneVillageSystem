<?php

use App\Models\Reservation;
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
            $table->foreignIdFor(Reservation::class)->references('id')->on('reservations');
            $table->enum('method', ['credit_card', 'M-pesa', 'Emola', 'cash'])->default('credit_card');
            $table->integer('price');
            $table->enum('status', ['panding', 'paid'])->default('panding');
            $table->timestamps();
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
