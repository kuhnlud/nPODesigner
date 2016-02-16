<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateILStemplateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_ILS_Data', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_TypeOfTemplate');
            $table->string('name');
            $table->integer('height');
            $table->integer('n_increment');
            $table->longText('ILS_template');
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
        Schema::drop('template_ILS_Data');
    }
}
