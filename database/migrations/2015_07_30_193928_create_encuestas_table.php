<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuestasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('encuestas', function(Blueprint $table)
		{
			$table->increments('Id_Encuesta');
			$table->string('Nombre_Encuesta');
			$table->string('Escolaridad_Encuesta');
			$table->string('FechaNacimiento_Encuesta');
			$table->string('LugarNacimiento_Encuesta');
			$table->integer('NHermanos_Encuesta');
			$table->string('Direccion_Encuesta');
			$table->date('FechaEntrevista_Encuesta');
			$table->bigInteger('Telefono_Encuesta');
			$table->string('NombreInstitucionRemite_Encuesta');
			$table->string('NombrePersonaRemite_Encuesta');
			$table->string('MotivoConsulta_Encuesta');
			$table->bigInteger('Nembarazos_Encuesta');
			$table->bigInteger('Nabortos_Encuesta');
			$table->char('Genero_Encuesta');
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
		Schema::drop('encuestas');
	}

}
