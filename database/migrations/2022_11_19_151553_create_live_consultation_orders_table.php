<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiveConsultationOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('live_consultation_orders', function (Blueprint $table) {
            $table->id();
            $table->string('no_order');
            $table->foreignId('consultant_id');
            $table->foreignId('customer_id');
            $table->string('tier');
            $table->dateTime('due_date');
            $table->integer('price');
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
        Schema::dropIfExists('live_consultation_orders');
    }
}
