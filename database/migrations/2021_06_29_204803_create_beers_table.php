<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('brewery')->nullable();
            $table->integer('tap');
            $table->string('style')->nullable();
            $table->float('abv')->nullable();
            $table->smallInteger('ibu')->nullable();
            $table->float('srm')->nullable();
            $table->float('og')->nullable();
            $table->float('fg')->nullable();
            $table->text('notes')->nullable();
            $table->boolean('active');
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
        Schema::dropIfExists('beers');
    }
}
