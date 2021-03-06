<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('user_id')->unsigned()->default(0);
            $table->string('title')->default('No title');
            $table->string('description')->nullable()->default('none');
            $table->string('author')->nullable()->default('none');
            $table->integer('category_id')->default('0');
            $table->string('finished_date')->nullable();
            $table->integer('photo_id')->nullable();
            $table->text('photo_path')->nullable();
            $table->string('movie_created_year')->nullable();
            $table->integer('active')->default(0);
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
