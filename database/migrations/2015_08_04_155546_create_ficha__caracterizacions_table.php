<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichaCaracterizacionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ficha__caracterizacions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('Numero_Ficha');
			$table->date('FechaInicio_Ficha');
			$table->date('FechaFin_Ficha');
			$table->integer('Fk_IdPrograma')->unsigned();
			$table->integer('Fk_IdCoordinacion')->unsigned();

			$table->foreign('Fk_IdPrograma')->references('id')->on('Programa_Formacions')->onDelete('Cascade');

			$table->foreign('Fk_IdCoordinacion')->references('id')->on('Coordinacions')->onDelete('Cascade');
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
		Schema::drop('ficha__caracterizacions');
	}

}
