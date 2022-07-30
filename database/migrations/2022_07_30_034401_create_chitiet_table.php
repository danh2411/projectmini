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
        Schema::create('chitiet', function (Blueprint $table) {
            $table->id('ma_chitiet');
            $table->unsignedBigInteger('ma_phieu');
            $table->date('ngaytra');
            $table->double('phi', 10, 2);
            $table->string('lydo', 100)->nullable();

            $table->foreign('ma_phieu')
            ->references('ma_phieu')->on('phieumuon')
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
        Schema::dropIfExists('chitiet');
    }
};
