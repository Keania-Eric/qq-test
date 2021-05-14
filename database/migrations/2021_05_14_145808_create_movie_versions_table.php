<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieVersionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_versions', function (Blueprint $table) {
            $table->id();
            $table->integer('movie_id');
            $table->integer('movie_category_id');
            $table->string('duration');
            $table->double('price');
            $table->integer('venue_id');
            $table->timestamp('showtime');
            $table->index('movie_id');
            $table->index('movie_category_id');
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
        Schema::dropIfExists('movie_versions');
    }
}
