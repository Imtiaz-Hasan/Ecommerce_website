<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSheppingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shepping', function (Blueprint $table) {
            $table->increments('sheping_id');
            $table->integer('sheping_customer_id');
            $table->string('sheping_name');
            $table->string('sheping_phone');
            $table->string('sheping_adders');
            $table->string('sheping_zip');
            $table->string('sheping_city');
            $table->string('sheping_country');
            $table->integer('sheping_status')->default(0);
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
        Schema::dropIfExists('shepping');
    }
}
