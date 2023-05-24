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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();

            $table->text('title')->nullable();
            $table->longText('html');
            $table->longText('css');

            //seo columns
            $table->string('metatitle')->nullable(); //títuloseo
            $table->string('slug')->nullable(); //slug
            $table->text('metadescription')->nullable(); //descrição

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
        Schema::dropIfExists('pages');
    }
};
