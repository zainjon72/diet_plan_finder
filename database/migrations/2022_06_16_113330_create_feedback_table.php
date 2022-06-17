<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('comment', 1000);
            $table->integer('rating')->nullable();
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
              $table->foreignId('plan_id')->constrained('diet_plans')->onDelete('cascade')->onUpdate('cascade');
              // $table->foreignId('item_id')->constrained('order_items')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('feedback');
    }
}
