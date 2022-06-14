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
        Schema::create('travel_item', function (Blueprint $table) {
            $table->uuid("travel_item_id");
            $table->primary('travel_item_id');
            $table->string("name");
            $table->integer("estimated_minute");
            $table->uuid("category_id");
            $table->foreign('category_id')->references('category_id')->on('category');
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
        Schema::dropIfExists('travel_item');
    }
};
