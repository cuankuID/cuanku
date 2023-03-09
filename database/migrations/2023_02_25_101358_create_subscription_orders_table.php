<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription_orders', function (Blueprint $table) {
            $table->id();
            $table->uuid('order_id');
            $table->foreignId('subscription_id')->constrained('subscriptions');
            $table->foreignId('user_id')->constrained('users');
            $table->enum('status', ['Menunggu Pembayaran', 'Menunggu Konfirmasi', 'Ditolak', 'Diterima'])->default('Menunggu Pembayaran');
            $table->string('payment_proof')->nullable();
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
        Schema::dropIfExists('subscription_orders');
    }
}
