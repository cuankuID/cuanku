<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_consultations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('consultant_id')->nullable()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('status_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('category_id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('no_order')->unique();
            $table->datetime('schedule');
            $table->text('problem')->nullable();
            $table->string('link')->nullable();
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
        Schema::dropIfExists('order_consultations');
    }
}
