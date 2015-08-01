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
			$table->increments('Id_Obs');
			$table->date('Fecha_Obs');
			$table->string('Descripcion_Obs');
			$table->integer('NSesiones_Obs');
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
		Schema::drop('observaciones');
	}

}
