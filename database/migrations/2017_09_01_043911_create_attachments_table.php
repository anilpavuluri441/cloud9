<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255);
            $table->string('attachment_path',255);
            $table->string('attachment_type',255);
            $table->string('attachment_title',255);
            $table->string('attachment_url',255);
            $table->string('attachment_url_target',255);
            $table->string('attachment_description',255);
            $table->integer('attachmentable_id')->unsigned();
            $table->string('attachmentable_type',255);
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
        Schema::dropIfExists('attachments');
    }
}
