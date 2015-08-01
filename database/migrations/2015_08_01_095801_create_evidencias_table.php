<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvidenciasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('evidencias', function(Blueprint $table)
		{
			$table->increments('Id_Evidencia');
			$table->string('Nombre_Evidencia');
			$table->string('Archivo_Evidencia');
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
		Schema::drop('evidencias');
	}

}
