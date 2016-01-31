<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdoptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('adopt', function (Blueprint $table) {
        $table->increments('adopt_id');
        $table->char('adopt_stat', 1);
        $table->string('name', 30);
        $table->string('breed', 20);
        $table->string('image', 30);
        $table->string('desc_long', 2000);
        $table->string('desc_short', 2000);
        $table->string('temperament', 15);
        $table->char('gender', 1);
        $table->char('hdb', 1);
        $table->date('birthday');
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
      Schema::drop('adopt');
    }
}
