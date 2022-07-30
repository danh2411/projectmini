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
        Schema::create('tbsach', function (Blueprint $table) {
            $table->id('ma_sach');
            $table->unsignedBigInteger('ma_nxb');
            $table->unsignedBigInteger('ma_tacgia');
            $table->unsignedBigInteger('ma_theloai');

            $table->string('ten_sach');
            $table->string('anh');
            $table->date('namnxb');
            $table->double('gia',10,2);
            $table->integer('soluong');
            $table->integer('soluong_hientai');
            $table->longText('noidung')->nullable();

            $table->foreign('ma_nxb')
            ->references('ma_nxb')->on('nxb');
            $table->foreign('ma_tacgia')
            ->references('ma_tacgia')->on('tacgia');
            $table->foreign('ma_theloai')
            ->references('ma_theloai')->on('theloai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbsach');
    }
};
