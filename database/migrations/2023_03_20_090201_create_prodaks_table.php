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
        Schema::create('prodaks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->unsignedInteger('harga')->default(0);
            $table->text('deskripsi');
            $table->timestamps();
            $table->foreignId('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prodaks');
    }
};
