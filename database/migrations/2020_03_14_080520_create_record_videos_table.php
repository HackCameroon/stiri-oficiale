<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('record_videos', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('title');
            $table->text('content');
            $table->bigInteger('from_resource_id');
            $table->bigInteger('user_id');
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
        Schema::dropIfExists('record_videos');
    }
}