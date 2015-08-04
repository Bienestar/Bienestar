<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsesorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asesors', function(Blueprint $table)
		{
			$table->Integer('id_Asesor');
			$table->char('TipoDoc_Asesor');
			$table->String('Nombre_Asesor');
			$table->String('Apellido_Asesor');
			$table->String('Direccion_Asesor');
			$table->bigInteger('Telefono_Asesor');
			$table->char('Genero_Asesor');
			$table->String('Email_Asesor')-> unique();
			$table->String('Contraseña_Asesor');
			$table->char('cargo_Asesor');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('asesors');
	}

}
