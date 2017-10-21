<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('category', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('name');
            $table->string('description');

        });

        
        Schema::create('book', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('name',255);
            $table->string('author',255);
            $table->integer('category_id')->unsigned();
            $table->date('published_date')->nullable();
            $table->string('user',255)->nullable();
            $table->boolean('available')->defautl(0);
            $table->date('created')->nullable();

        });

        Schema::table('book', function (Blueprint $table) {
            $table->foreign('category_id')
                ->references('id')->on('category')
                ->onDelete('restrict');
        });

        Schema::create('category_book', function (Blueprint $table) {

            $table->integer('book_id');
            $table->integer('category_id');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_book');
        Schema::dropIfExists('category');
        Schema::dropIfExists('book');
    }
}
