@extends('layouts')

@section('title','Registro Personal')

@section('content')


<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
       <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Registrar Personal</h4>
            <div class="ml-auto text-right">
	            <nav aria-label="breadcrumb">
	                <ol class="breadcrumb">
	                    <li class="breadcrumb-item">Informacion Personal</li>
	                    <li class="breadcrumb-item active" aria-current="page">Registro Personal</li>
	                </ol>
	            </nav>
            </div>
    	</div>
    </div>
</div>

<!-- ============================================================== -->
<!-- CONTENDOR DE LA SECCION EDITABLE  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <center><h2 class="card-title">REGISTRO DE PERSONAL</h2></center>
    <div class="card">
        <div class="card-body wizard-content">
            <h4 class="card-title">NOTA: Todos los campos señalados con (*) son campos obligatorios</h4>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <h6>Por favor corrige los errores debajo:</h6>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form id="example-form" method="post" action="{{ url('personal') }}" class="m-t-40">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label>Carnet Militar <small class="text-muted">(*)</small></label>
                                        <input type="text" name="per_cm" class="form-control" placeholder="31204001" data-toggle="tooltip" title="Inserte Carnet Militar">
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Apellido Paterno <small class="text-muted">(*)</small></label>
                                        <input type="text" name="per_paterno" class="form-control" placeholder="ARUQUIPA" data-toggle="tooltip" title="Inserte Primer Apellido">
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Apellido Materno <small class="text-muted"></small></label>
                                        <input type="text" name="per_materno" class="form-control" placeholder="CARVAJAL" data-toggle="tooltip" title="Inserte Segundo Apellido">
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Nombre<small class="text-muted">(*)</small></label>
                                        <input type="text" name="per_nombre" class="form-control" placeholder="JUAN PABLO" data-toggle="tooltip" title="Inserte Nombres">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label>Fecha de Nacimiento <small class="text-muted">(*)</small></label>
                                        <div class="input-group">
                                            <input type="date" name="per_fecha_nacimiento" class="form-control" data-toggle="tooltip" title="Inserte Fecha Nacimiento">
                                        </div>                                    
                                    </div>
                                    <div class="col-lg-3">
                                        <label >Departamento <small class="text-muted">(*)</small></label>
                                            <select class="form-control custom-select" name="" data-toggle="tooltip" title="Seleccione Departamento">
                                                <option>Seleccionar Departamento</option>
                                                <option>Seleccionar Departamen</option>
                                                <option>--- Seleccionar Departamento ---</option>
                                                <option>--- Seleccionar Departamento ---</option>     
                                            </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Provincia<small class="text-muted">(*)</small></label>
                                        <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Provincia">
                                            <option>Seleccionar:</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Localidad <small class="text-muted">(*)</small></label>
                                        <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Localidad">
                                            <option>Seleccionar:</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label>Carnet de Identidad <small class="text-muted">(*)</small></label>
                                        <input type="text" name="per_ci" class="form-control" placeholder="6234278" data-toggle="tooltip" title="Inserte Carnet de Identidad">
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Expedido en: <small class="text-muted">(*)</small></label>
                                        <select class="form-control custom-select" name="per_expedido" data-toggle="tooltip" title="Seleccione lugar de expedicion">
                                            <option>Seleccionar:</option>
                                            <option value="LP">La Paz</option>
                                            <option value="CB">Cochabamba</option>
                                            <option value="SC">Santa Cruz</option>
                                            <option value="OR">Oruro</option>
                                            <option value="PT">Potosi</option>
                                            <option value="CH">Chuquisaca</option>
                                            <option value="TJ">Tarija</option>
                                            <option value="PA">Pando</option>
                                            <option value="BN">Beni</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Estado Civil <small class="text-muted">(*)</small></label>
                                        <select class="form-control custom-select" name="per_estado_civil" data-toggle="tooltip" title="Seleccione Estado Civil">
                                            <option>Seleccionar:</option>
                                            <option value="CASADO (A)">CASADO (A)</option>
                                            <option value="SOLTERO (A)">SOLTERO (A)</option>
                                            <option value="VIUDO (A)">VIUDO (A)</option>
                                            <option value="DIVORCIADO (A)">DIVORCIADO (A)</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Sexo <small class="text-muted">(*)</small></label>
                                        <select class="form-control custom-select" name="per_sexo" data-toggle="tooltip" title="Seleccione Sexo">
                                            <option>Seleccionar:</option>
                                            <option value="MASCULINO">MASCULINO</option>
                                            <option value="FEMENINO">FEMENINO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label>Telefono Fijo <small class="text-muted"></small></label>
                                        <input type="text" name="per_telefono" class="form-control" placeholder="22-432345" data-toggle="tooltip" title="Inserte Telefono Fijo">
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Telefono Celular <small class="text-muted">(*)</small></label>
                                        <input type="text" name="per_celular" class="form-control" placeholder="77765433" data-toggle="tooltip" title="Inserte Telefono Celular">
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Correo Electronico <small class="text-muted">(*)</small></label>
                                        <input type="email" name="per_mail" class="form-control" placeholder="digetic@fab.bo" data-toggle="tooltip" title="Inserte Correo Electronico">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-9">
                                        <label>Direccion Actual <small class="text-muted">(*)</small></label>
                                        <input type="text" name="per_domicilio" class="form-control" placeholder="C. Jose Nro 1744 Villa Alemania La Paz"  data-toggle="tooltip" title="Inserte Direccion Actual">
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Tipo de Vivienda<small class="text-muted"></small></label>
                                        <select class="form-control custom-select"  data-toggle="tooltip" title="Seleccione Tipo de Vivienda">
                                            <option>Seleccionar:</option>
                                            <option value="">PROPIO</option>
                                            <option value="">ALQUILER</option>
                                            <option value="">ANTICRETICO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-9">
                                        <label>Direccion Permanente <small class="text-muted">(*)</small></label>
                                        <input type="text" class="form-control" placeholder="C. Jose Nro 1744 Villa Alemania La Paz" data-toggle="tooltip" title="Inserte Direccion Permanente">
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Tipo de Vivienda<small class="text-muted"></small></label>
                                        <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Tipo de Vivienda">
                                            <option>Seleccionar:</option>
                                            <option value="">PROPIO</option>
                                            <option value="">ALQUILER</option>
                                            <option value="">ANTICRETICO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label>Profesion Libre<small class="text-muted"></small></label>
                                        <input type="text" name="per_prof_libre" class="form-control" placeholder="Ing. Civil"  data-toggle="tooltip" title="Inserte Profesion Libre">
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Nro de Carnet de Seguro<small class="text-muted"></small></label>
                                        <input type="text" name="per_seguro" class="form-control" placeholder="670523JJP"  data-toggle="tooltip" title="Inserte Nro. Carnet de Seguro">
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Nro. Libreta de Serv. militar<small class="text-muted"></small></label>
                                        <input type="text" name="per_serv_mil" class="form-control" placeholder="A-10000000B"  data-toggle="tooltip" title="Nro. de Lib. de Serv. Militar">
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Religion<small class="text-muted"></small></label>
                                        <select class="form-control custom-select" name="per_religion" data-toggle="tooltip" title="Seleccione Religion">
                                            <option>Seleccionar:</option>
                                            <option value="CATOLICO">CATOLICO</option>
                                            <option value="CRISTIANO">CRISTIANO</option>
                                            <option value="ADVENTISTA">ADVENTISTA</option>
                                            <option value="MORMON">MORMON</option>
                                            <option value="TESTITO DE JEHOVA">TESTITO DE JEHOVA</option>
                                            <option value="ORTODOXA">ORTODOXA</option>
                                            <option value="PROTESTANTE">PROTESTANTE</option>
                                            <option value="JUDAISTA">JUDAISTA</option>
                                            <option value="ISLAMISTA">ISLAMISTA</option>
                                            <option value="BUDISTA">BUDISTA</option>
                                            <option value="HINDUISTA">HINDUISTA</option>
                                            <option value="NINGUNO">NINGUNO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-12">
                                    <div class="col-lg-12">
                                        <label>Seleccione su foto 4*4 para su archivo<small class="text-muted">(*)</small></label>
                                        <input type="file"  class="form-control" name=""  data-toggle="tooltip" title="Seleccione Su foto">
                                    </div>
                                </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-info">Registrar Persona</button>
                                <button type="submit" class="btn btn-secondary">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

