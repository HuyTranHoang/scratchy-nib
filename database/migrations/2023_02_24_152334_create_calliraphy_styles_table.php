<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('calliraphy_styles', function (Blueprint $table) {
            $table->id('style_id');
            $table->string('style_name', 50);
            $table->text('style_description')->nullable();
            $table->foreignId('category_id')->references('category_id')->on('calligraphy_categories')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('calliraphy_styles');
    }
};
