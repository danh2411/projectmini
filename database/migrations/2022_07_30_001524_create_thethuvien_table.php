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
        Schema::create('thethuvien', function (Blueprint $table) {
            $table->id('ma_the');
            $table->dateTime('ngaycap');
            $table->unsignedBigInteger('user_id');

            // $table->foreignId('user_id')->constrained();
            $table->foreign('user_id')
            ->references('id')->on('users')
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
        Schema::dropIfExists('thethuvien');
    }
};
