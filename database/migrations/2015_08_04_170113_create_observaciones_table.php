<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObservacionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('observaciones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('Fecha_Obs');
			$table->string('Descripcion_Obs');
			$table->integer('NSesiones_Obs');
			$table->integer('Fk_IdCita')->unsigned();
			$table->timestamps();



			$table->foreign('Fk_IdCita')->references('id')->on('citas');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('observaciones');
	}

}
