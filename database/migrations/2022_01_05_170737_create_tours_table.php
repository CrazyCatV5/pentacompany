<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('short_description');
            $table->text('description');
            $table->integer('rating',0,true);
            $table->string('country');
            $table->string('city');
            $table->text('image')->nullable();
            $table->boolean('forChild')->nullable();
            $table->boolean('healthy')->nullable();
            $table->boolean('excursion')->nullable();
            $table->boolean('corporate')->nullable();
            $table->boolean('ski')->nullable();
            $table->boolean('historical')->nullable();
            $table->boolean('beach')->nullable();
            $table->integer('vouchers_count',0,true);
            $table->integer('vouchers_sold');
            $table->integer('cost');
            $table->date('start');
            $table->date('finish');
            $table->integer('duration');
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
        Schema::dropIfExists('tours');
    }
}
