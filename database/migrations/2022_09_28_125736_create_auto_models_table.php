<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutoModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auto_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('founded');
            $table->longText('description');
            $table->longText('condition')->nullable();
            $table->integer('modelNumber')->nullable()->default(0);
            $table->string('price')->nullable()->default(0);
            $table->string('agentNumber')->nullable()->default(0);
            $table->timestamps();
            $table->string('image_path'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auto_models');
    }
}
