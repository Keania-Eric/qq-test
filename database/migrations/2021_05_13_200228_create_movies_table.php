<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('desc');
            $table->timestamp('showtime');
            $table->integer('duration')->comment('Estimated movie length in mins');
            $table->integer('venue_id')->comment('Movie Venue');
            $table->string('cover_img')->comment('Movie Cover Image');
            $table->double('avg_rating')->comment('Movie Average Rating');
            $table->string('tag_line');
            $table->integer('status')->default(0)->comment('1 - comming');
            $table->softDeletes();
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
        Schema::dropIfExists('movies');
    }
}
