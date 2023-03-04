<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id('feedback_id');
            $table->text('feedback_message');
            $table->foreignId('user_id')->references('user_id')->on('users')
                ->onDelete('cascade');
            $table->foreignId('calligraphy_id')->references('calligraphy_id')->on('calligraphies')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('feedback');
    }
};
