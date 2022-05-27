<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDietPlanMealTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diet_plan_meal', function (Blueprint $table) {
            $table->id();
            $table->foreignId('diet_plan_id')->constrained('diet_plans')->onDelete('cascade')->onUpdate('cascade');    
            $table->foreignId('meal_id')->constrained('meals')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diet_plan_meal');
    }
}
