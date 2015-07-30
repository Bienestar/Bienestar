<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcudientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('acudientes', function(Blueprint $table)
		{
			$table->integer('Id_Acudiente');
			$table->string('Nombre_Acudiente');
			$table->string('Apellido_Acudiente');
			$table->bigInteger('Direccion_Acudiente');
			$table->string('Direccion_Acudiente');
			$table->integer('Ncelular_Acudiente');

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
		Schema::drop('acudientes');
	}

}
