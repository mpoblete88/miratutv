<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('slider_id');

            $table->string('types_channel');
            $table->string('file_name');
            $table->string('size');
            $table->string('format_file');
            $table->text('path');

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
        Schema::dropIfExists('slider_attachments');
    }
}
