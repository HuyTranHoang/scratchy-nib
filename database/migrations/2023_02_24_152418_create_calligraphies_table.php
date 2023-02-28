<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('calligraphies', function (Blueprint $table) {
            $table->id('calligraphy_id');
            $table->string('calligraphy_name',50);
            $table->text('calligraphy_description')->nullable();
            $table->foreignId('style_id')->references('style_id')->on('calliraphy_styles')
                ->onDelete('cascade');;
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('calligraphies');
    }
};
