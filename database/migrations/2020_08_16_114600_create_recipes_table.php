<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('category');
            $table->string('introduction');
            $table->string('image_path')->nullable();
            $table->string('item1');
            $table->string('item2')->nullable();
            $table->string('item3')->nullable();
            $table->string('quantity1');
            $table->string('quantity2')->nullable();
            $table->string('quantity3')->nullable();
            $table->string('step1');
            $table->string('step2')->nullable();
            $table->string('step3')->nullable();
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
        Schema::dropIfExists('recipes');
    }
}
