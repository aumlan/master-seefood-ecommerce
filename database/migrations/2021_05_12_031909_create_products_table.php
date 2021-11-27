<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->longText('description')->nullable();
            $table->mediumText('short_description')->nullable();
            $table->boolean('is_published')->default(1);
            $table->string('discount_price')->nullable();
            $table->string('purchase_price')->nullable();
            $table->string('sales_price')->nullable();
            $table->string('sales_price_euro')->nullable();
            $table->string('tax')->nullable();
            $table->integer('manufacture_id')->nullable();
            $table->string('sku')->nullable();
            $table->string('productShowingPlace')->nullable();
            $table->string('qty')->nullable();
            $table->string('stock_status')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('sub_category_id')->nullable();
            $table->integer('brand_id')->nullable();
            $table->dateTime('publish_date_time')->nullable();
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
        Schema::dropIfExists('products');
    }
}
