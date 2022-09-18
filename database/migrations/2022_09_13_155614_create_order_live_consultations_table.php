<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderLiveConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_live_consultations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('consultant_id');
            $table->string('no_order');
            $table->enum('status', ['Menunggu', 'Sedang Berlangsung', 'Selesai']);
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
        Schema::dropIfExists('order_live_consultations');
    }
}
