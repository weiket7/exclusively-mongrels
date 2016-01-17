<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('config', function (Blueprint $table) {
        $table->increments('config_id');
        $table->string('config_type', 10);
        $table->string('config_key', 15);
        $table->string('config_value', 1000);
        $table->string('config_desc', 200);
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
      Schema::drop('config');

    }
}
