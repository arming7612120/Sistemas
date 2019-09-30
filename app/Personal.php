<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Personal extends Model
{
	protected $primaryKey = 'per_codigo';

	protected $fillable = [
        'per_paterno', 'per_materno','per_nombre','per_fecha_nacimiento','per_estado_civil', 'per_sexo', 'per_ci','per_expedido','per_telefono','per_celular', 'per_mail', 'per_domicilio','per_foto','per_observaciones','per_sysuser', 'per_systime', 'per_prof_libre','per_promo','per_seguro','per_serv_mil', 'per_religion',
    ];

}
