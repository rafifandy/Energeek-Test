<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_sets', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->bigInteger('id_candidate')->unsigned();
            $table->bigInteger('id_skill')->unsigned();
            $table->primary(array('id_candidate','id_skill'));
            $table->foreign('id_candidate')->references('id')->on('candidates')->onDelete('cascade');
            $table->foreign('id_skill')->references('id')->on('skills')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skill_sets');
    }
};
