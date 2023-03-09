<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetConsultationOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meet_consultation_orders', function (Blueprint $table) {
            $table->id();
            $table->uuid('order_id');
            $table->foreignId('consultant_id')->constrained('users');
            $table->foreignId('customer_id')->constrained('users');
            $table->dateTime('date');
            $table->dateTime('due_date');
            $table->integer('price');
            $table->string('payment_proof')->nullable();
            $table->enum('status', ['Menunggu Pembayaran', 'Menunggu Konfirmasi', 'Ditolak', 'Diterima'])->default('Menunggu Pembayaran');
            $table->string('information')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meet_consultation_orders');
    }
}
