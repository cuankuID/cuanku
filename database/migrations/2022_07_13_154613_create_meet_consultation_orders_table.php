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
            $table->string('no_order');
            $table->foreignId('consultant_id');
            $table->foreignId('customer_id');
            $table->dateTime('date');
            $table->integer('price');
            $table->enum('status', ['Menunggu Pembayaran', 'Menunggu Konfirmasi', 'Ditolak', 'Diterima'])->default('Menunggu Pembayaran');
            $table->enum('method', ['BCA', 'BNI', 'BRIVA', 'Mandiri']);
            $table->enum('packet', ['Free', 'Silver', 'Gold', 'Platinum']);
            $table->string('information')->nullable();
            $table->string('payment_proof')->nullable();
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
