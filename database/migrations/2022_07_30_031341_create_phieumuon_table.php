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
        Schema::create('phieumuon', function (Blueprint $table) {
            $table->id('ma_phieu');
            $table->unsignedBigInteger('ma_the');
            $table->date('ngaymuon');
            $table->date('henngaytra');
            $table->integer('soluongmax');

            $table->foreign('ma_the')
            ->references('ma_the')->on('thethuvien')
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
        Schema::dropIfExists('phieumuon');
    }
};
