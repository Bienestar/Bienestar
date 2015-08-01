<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('actividads', function(Blueprint $table)
		{
			$table->increments('Id_Act');
			$table->string('Nombre_Act');
			$table->string('Descripcion_Act');
			$table->date('Fecha_Act');
			$table->char('Tipo_Act');
			$table->string('Lider_Act');
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
		Schema::drop('actividads');
	}

}
