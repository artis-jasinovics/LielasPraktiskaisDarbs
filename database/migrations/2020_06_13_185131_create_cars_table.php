<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
                $table->string('registration', 8)->primary();
				$table->string('series');
				$table->string('model');
				$table->date('produced_on');
				$table->string('full_mass');
				$table->float('fuel_consumption');
				$table->unsignedInteger('owner_id')->nullable();
				$table->timestamps();
        });
		Schema::table('cars', function(Blueprint $table) {
        $table->foreign('owner_id')->references('id')->on('owners')->onUpdate('CASCADE')->onDelete('CASCADE');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
