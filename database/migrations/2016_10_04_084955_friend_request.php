<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Moloquent\Schema\Blueprint;

class FriendRequest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('friend_request', function (Blueprint $table) {
            $table->increments('id');
            $table->string('from_id');
            $table->string('to_id');
            $table->boolean('status');
            $table->boolean('block');
            $table->timestamps();

            $table->foreign('from_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('to_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop("friend_request");
    }
}
