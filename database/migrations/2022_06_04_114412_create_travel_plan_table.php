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
        Schema::create('travel_plan', function (Blueprint $table) {
            $table->uuid("plan_id");
            $table->primary('plan_id');
            $table->integer("day");
            $table->uuid("author_id");
            $table->foreign('author_id')->references('author_id')->on('author');
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
        Schema::dropIfExists('travel_plan');
    }
};
