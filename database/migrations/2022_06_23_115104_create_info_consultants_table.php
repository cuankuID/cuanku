<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoConsultantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_consultants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('consultant_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('office_id');
            $table->string('slug');
            $table->string('photo')->nullable();
            $table->string('province');
            $table->string('city');
            $table->string('full_address')->nullable();
            $table->string('price');
            $table->string('specialist');
            $table->string('work_experience');
            $table->text('biography')->nullable();
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
        Schema::dropIfExists('info_consultants');
    }
}
