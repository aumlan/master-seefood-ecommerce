<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('type_of_banner');
            $table->string('banner_title')->nullable();
            $table->string('banner_sub_title')->nullable();
            $table->string('banner_url')->nullable();
            $table->string('banner_image_one')->nullable();
            $table->string('banner_image_two')->nullable();
            $table->string('bg_color')->nullable();
            $table->string('isPublished')->nullable();
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
        Schema::dropIfExists('banners');
    }
}
