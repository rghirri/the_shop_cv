<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name');
            $table->string('role');
            $table->text('content');
            $table->text('feedback');
            $table->string('customerName');
            $table->text('intro');
            $table->string('skill');
            $table->string('percent');
            $table->string('tabOneTitle');
            $table->text('tabOneContent');
            $table->string('tabTwoTitle');
            $table->text('tabTwoContent');
            $table->string('tabThreeTitle');
            $table->text('tabThreeContent');
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
        Schema::dropIfExists('abouts');
    }
}