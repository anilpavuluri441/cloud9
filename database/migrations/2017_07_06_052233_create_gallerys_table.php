<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGallerysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('gallerys', function (Blueprint $table) {
            $table->increments('id');
            $table->text('image');
            $table->integer('gallery_type_id')->unsigned();
            $table->foreign('gallery_type_id')
                   ->references('id')->on('gallery_types')
                   ->onDelete('cascade');
            $table->string('image_tilte',250)->nullable();
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
        //
        Schema::dropIfExists('gallerys');
    }
}
