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
        Schema::create('article', function (Blueprint $table) {
            $table->uuid("article_id");
            $table->primary('article_id');
            $table->uuid("travel_item_id");
            $table->foreign('travel_item_id')->references('travel_item_id')->on('travel_item');
            $table->uuid("author_id");
            $table->foreign('author_id')->references('author_id')->on('author');
            $table->text("content");
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
        Schema::dropIfExists('article');
    }
};
