<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konsultasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_dokter');
            $table->foreignId('id_customer');
            $table->foreignId('id_customer_premium');
            $table->string('dataKonsultasi');
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
        Schema::dropIfExists('konsultasis');
    }
};
