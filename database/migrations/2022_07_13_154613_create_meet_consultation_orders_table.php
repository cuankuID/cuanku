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
            $table->enum('status', ['Menunggu Pembayaran', 'Diterima']);
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
