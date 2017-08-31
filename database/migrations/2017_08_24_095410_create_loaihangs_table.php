<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaihangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaihangs', function (Blueprint $table){
           $table->increments('id');
            $table->string('name');
            $table->integer('hanghoa_id')->unsigned();
            $table->foreign('hanghoa_id')->references('id')->on('hanghoas');
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
    }
}
