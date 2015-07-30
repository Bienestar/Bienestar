<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAprendizsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aprendizs', function(Blueprint $table)
		{
			$table->integer('Id_Aprendiz');
			$table->char('TipoDoc_Aprendiz');
			$table->string('Nombre');
			$table->string('Apellido');
			$table->string('Direccion');
			$table->bigInteger('Telefono_Aprendiz');
			$table->char('Genero_Aprendiz');
			$table->String('Email');
			$table->bigInteger('FichaCaracterizacion');
			$table->String('ProgramaFormacion');
			$table->String('Contraseña');
			$table->String('Eps');


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
		Schema::drop('aprendizs');
	}

}
