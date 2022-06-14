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
        Schema::create('plan_item', function (Blueprint $table) {
            $table->uuid("plan_item_id");
            $table->uuid("plan_id");
            $table->foreign('plan_id')->references('plan_id')->on('travel_plan');
            $table->integer("type");
            $table->uuid("travel_item_id");
            $table->foreign('travel_item_id')->references('travel_item_id')->on('travel_item');
            $table->integer("order");
            $table->integer("day");
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
        Schema::dropIfExists('plan_item');
    }
};
