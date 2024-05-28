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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('series', 255);
            $table->string('thumb', 255);
            $table->string('price', 255);
            $table->string('type', 255);
            $table->string('publisher', 255);
            $table->string('release_date', 255);
            $table->string('author', 255);
            $table->text('description')->nullable();
            $table->integer('pages')->nullable();
            $table->float('rating', 4, 2)->nullable();
            $table->integer('total_votes')->nullable();
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
        Schema::dropIfExists('comics');
    }
};
