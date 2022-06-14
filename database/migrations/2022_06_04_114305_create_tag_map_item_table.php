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
        Schema::create('tag_map_item', function (Blueprint $table) {
            $table->uuid("tag_id");
            $table->foreign('tag_id')->references('tag_id')->on('tag');
            $table->uuid("travel_item_id");
            $table->foreign('travel_item_id')->references('travel_item_id')->on('travel_item');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tag_map_item');
    }
};
