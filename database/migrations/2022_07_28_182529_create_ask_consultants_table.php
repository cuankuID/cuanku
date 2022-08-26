<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAskConsultantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ask_consultants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('consultant_id')->nullable();
            $table->text('question');
            $table->text('answer')->nullable();
            $table->enum('status', ['Menunggu Jawaban', 'Terjawab']);
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
        Schema::dropIfExists('ask_consultants');
    }
}
