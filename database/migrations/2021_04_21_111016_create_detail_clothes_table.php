<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailClothesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_clothes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->string('color1')->nullable();
            $table->string('color2')->nullable();
            $table->string('color3')->nullable();
            $table->string('color4')->nullable();
            $table->string('color5')->nullable();
            $table->string('number1')->nullable();
            $table->string('number2')->nullable();
            $table->string('number3')->nullable();
            $table->string('number4')->nullable();
            $table->string('number5')->nullable();
            $table->string('number6')->nullable();
            $table->unsignedBigInteger('detail_id');
            $table->foreign('detail_id')->references('id')->on('mainclothes')->onDelete('cascade');
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
        Schema::dropIfExists('detail_clothes');
    }
}
