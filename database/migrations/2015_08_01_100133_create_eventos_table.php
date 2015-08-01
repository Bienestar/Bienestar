<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('eventos', function(Blueprint $table)
		{
			$table->increments('Id_Evento');
			$table->string('Nombre_Evento');
			$table->date('FechaInicio_Evento');
			$table->date('FechaFinalizacion_Evento');
			$table->string('Direccion_Evento');
			$table->string('Restricciones_Evento');
			$table->integer('Cupos_Evento');
			$table->string('Descripcion_Evento');
			$table->char('Estado_Evento');
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
		Schema::drop('eventos');
	}

}
