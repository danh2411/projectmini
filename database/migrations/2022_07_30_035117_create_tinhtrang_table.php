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
        Schema::create('tinhtrang', function (Blueprint $table) {
            $table->id('ma_tinhtrang');
            $table->unsignedBigInteger('ma_chitiet');
            $table->integer('tinhtrang');
        

              $table->foreign('ma_chitiet')
            ->references('ma_chitiet')->on('chitiet')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tinhtrang');
    }
};
