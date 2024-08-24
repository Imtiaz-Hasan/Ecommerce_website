<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_comments', function (Blueprint $table) {
            $table->increments('comment_id');
            $table->integer('comments_blog_id');
            $table->integer('comment_service_id')->default(0);
            $table->string('user_name');
            $table->string('user_email');
            $table->text('user_massage');
            $table->integer('user_status')->default(0);
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
        Schema::dropIfExists('tbl_comments');
    }
}
