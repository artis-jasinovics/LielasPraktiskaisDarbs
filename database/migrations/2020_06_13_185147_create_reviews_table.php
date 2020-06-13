<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
			$table->longText('Review');
			$table->string('registration',8)->nullable();
            $table->timestamps();
        });
		Schema::table('reviews', function(Blueprint $table) {
		$table->foreign('registration')->references('registration')->on('cars')->onUpdate('CASCADE')->onDelete('CASCADE');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
