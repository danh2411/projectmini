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
            $table->date('ngaytra');
            $table->double('phi', 10, 2);
            $table->string('lydo', 100)->nullable();
        //     $table->unsignedBigInteger('ma_tinhtrang');
        //     $table->foreign('ma_tinhtrang')
        //   ->references('ma_tinhtrang')->on('tinhtrang')
        //   ->onDelete('cascade');
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
