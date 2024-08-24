<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamMambersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_mambers', function (Blueprint $table) {
            $table->increments('member_id');
            $table->string('member_name');
            $table->string('member_image');
            $table->text('member_detels');
            $table->integer('member_type');
            $table->integer('member_status')->default(0);
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
        Schema::dropIfExists('team_mambers');
    }
}
