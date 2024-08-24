<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_orders', function (Blueprint $table) {
            $table->increments('order_id');
            $table->integer('product_id');
            $table->integer('customer_id');
            $table->integer('sheping_id');
            $table->string('or_product_name');
            $table->string('or_product_image');
            $table->integer('or_product_qty');
            $table->integer('or_product_price');
            $table->integer('or_product_total');
            $table->string('order_type');
            $table->integer('order_status')->default(0);
            $table->integer('order_pandding')->default(0);
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
        Schema::dropIfExists('tbl_orders');
    }
}
