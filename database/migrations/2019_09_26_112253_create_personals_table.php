<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
             // $table->bigIncrements('id');
            $table->bigIncrements('per_codigo');
			$table->string('per_paterno',50);
			$table->string('per_materno',50);
			$table->string('per_nombre',80);
			$table->date('per_fecha_nacimiento');
			$table->string('per_estado_civil',15);
			$table->string('per_sexo',10);
			$table->string('per_ci',20);
			$table->string('per_expedido',5);
			$table->string('per_telefono',8);
			$table->string('per_celular',9);
			$table->string('per_mail',50);
			$table->string('per_domicilio',150);			
			$table->string('per_foto',50);
			$table->string('per_observaciones',200);
			$table->string('per_cm',8);
			$table->string('per_sysuser',50);
			$table->date('per_systime');
			$table->string('per_prof_libre',100);
			$table->string('per_promo',5);
			$table->string('per_seguro',30);
			$table->string('per_serv_mil',30);
			$table->string('per_religion',50);
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
        Schema::dropIfExists('personals');
    }
}
