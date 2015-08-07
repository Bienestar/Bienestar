<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRemisionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('remisiones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->char('Tipo_Remison');
			$table->date('Fecha_Remision');
			$table->string('Descripcion_Remision');
			$table->integer('Fk_IdObservaciones')->unsigned();
			$table->timestamps();

			$table->foreign('Fk_IdObservaciones')->references('id')->on('Observaciones');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('remisiones');
	}

}
