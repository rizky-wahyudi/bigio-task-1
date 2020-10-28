<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommodityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_commodity', function (Blueprint $table) {
            $table->increments('id');
            $table->String('commodityName',30);
            $table->String('market',30);
            $table->integer('commodityPrice');
            $table->date('date');
            $table->integer('status');
            $table->String('surveyor',20);
            $table->foreign('surveyor')->references('username')->on('tb_surveyor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_commodity');
    }
}
