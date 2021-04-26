<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsPiecesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details_pieces', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('size');
            $table->string('color');
            $table->unsignedBigInteger('accept_id');
            $table->string('image');
            $table->string('clothes_id');
            $table->foreign('accept_id')->references('id')->on('accepts')->onDelete('cascade');
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
        Schema::dropIfExists('details_pieces');
    }
}
