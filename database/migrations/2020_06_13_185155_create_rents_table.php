<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('renter_id')->nullable();
			$table->string('registration',8)->nullable();
			$table->date('rented_from');
			$table->date('rented_to');
            $table->timestamps();
        });
		
		Schema::table('rents', function(Blueprint $table) {
        $table->foreign('renter_id')->references('id')->on('owners')->onUpdate('CASCADE')->onDelete('CASCADE');
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
        Schema::dropIfExists('rents');
    }
}
