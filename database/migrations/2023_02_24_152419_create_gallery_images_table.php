<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('gallery_images', function (Blueprint $table) {
            $table->id('image_id');
            $table->string('image_name',50);
            $table->string('image_description',255);
            $table->foreignId('calligraphy_id')->references('calligraphy_id')->on('calligraphies')
                ->onDelete('cascade');;
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gallery_images');
    }
};
