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
			
$table->increments('Id');
			$table->char('TipoDoc_Aprendiz');
			$table->bigInteger('NumeroIdentificacion_Aprendiz')-> unique();
			$table->string('Nombre', 35);
			$table->string('Apellido', 35);
			$table->string('Direccion', 60);
			$table->bigInteger('Telefono_Aprendiz');
			$table->char('Genero_Aprendiz', 1);
			$table->String('Email', 60)->unique();
			$table->String('Password', 10);
			$table->String('Eps', 60);
			$table->integer('Fk_IdFicha')->unsigned();
			


			$table->foreign('Fk_IdFicha')->references('id')->on('Ficha__Caracterizacions');
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
