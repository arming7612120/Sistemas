@extends('layouts')

@section('title','Actualizar Registros')

@section('content')


<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
       <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Actualizar Registros</h4>
            <div class="ml-auto text-right">
	            <nav aria-label="breadcrumb">
	                <ol class="breadcrumb">
	                    <li class="breadcrumb-item">Informacion Personal</li>
	                    <li class="breadcrumb-item active" aria-current="page">Actualizar Registros</li>
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
    <center><h2 class="card-title">ACTUALIZACION DE REGISTROS</h2></center>
    <div class="card">
        <div class="card-body wizard-content">
            <h4 class="card-title">NOTA: Seleccione la opcion correcta para actualizar datos</h4>
            <form id="example-form" action="#" class="m-t-40"> 
                <div class="row">
                    <div class="col-12">
                        <div class="contenedor-informacion">
                            <div class="contenido-imagen">
                                <img src="../../assets/images/users/1.jpg">
                            </div>
                           <div class="card contenido-detalle">
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-lg-3">
                                            <label>Carnet Militar<small class="text-muted"></small></label>
                                            <strong>31208994</strong>
                                        </div>
                                        <div class="col-lg-3">
                                            <label>Grado<small class="text-muted"></small></label>
                                            <strong>31208994</strong>
                                        </div>
                                        <div class="col-lg-3">
                                            <label>Nombres<small class="text-muted"></small></label>
                                            <strong>31208994</strong>
                                        </div>
                                        <div class="col-lg-3">
                                            <label>Apellido Paterno<small class="text-muted"></small></label>
                                            <strong>31208994</strong>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-3">
                                            <label>Apellido Materno<small class="text-muted"></small></label>
                                            <strong>31208994</strong>
                                        </div>
                                        <div class="col-lg-3">
                                            <label>Carnet de Identidad<small class="text-muted"></small></label>
                                            <strong>31208994</strong>
                                        </div>
                                        <div class="col-lg-3">
                                            <label>Expedido en:<small class="text-muted"></small></label>
                                            <strong>31208994</strong>
                                        </div>
                                        <div class="col-lg-3">
                                            <label>varios<small class="text-muted"></small></label>
                                            <strong>31208994</strong>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <a href="" data-toggle="modal" data-target=".DatosPersonales" class="btn btn-info">Datos Personales</a>
                                <a href="" data-toggle="modal" data-target=".SituacionMilitar" class="btn btn-info">Situacion Militar</a>
                                <a href="" data-toggle="modal" data-target=".CambioEscalafon" class="btn btn-info">Cambio de Escalafón</a>
                                <a href="" data-toggle="modal" data-target=".CambioEspecialidad" class="btn btn-info">Cambio de Especialidad</a>
                                <a href="" data-toggle="modal" data-target=".ActualizarComplemento" class="btn btn-info">Actualizar Complemento</a>
                                <a href="/personal.actualizar_registros" class="btn btn-secondary">Volver Atrás</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal actualizar datos personales -->
<div class="modal fade DatosPersonales" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form action="">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR DATOS PERSONALES</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="card-title"></h5>
                <div class="card">
                    <div class="contenido-modal">
                        <div class="imagen-modal">
                           <img src="../../assets/images/users/1.jpg"> 
                        </div>
                        <div class="detalle-modal">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label>Carnet Militar<small class="text-muted"></small></label>
                                        <strong>31208994</strong>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Nombres<small class="text-muted"></small></label>
                                        <strong>31208994</strong>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Apellido Paterno<small class="text-muted"></small></label>
                                        <strong>31208994</strong>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Apellido Paterno<small class="text-muted"></small></label>
                                        <strong>31208994</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label>Fecha de Nacimiento <small class="text-muted"></small></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="datepicker-autoclose" placeholder="mm/dd/yyyy" data-toggle="tooltip" title="Fecha de Nacimiento">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>                                    
                            </div>
                            <div class="col-lg-3">
                                <label>Departamento <small class="text-muted"></small></label>
                                    <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Departamento">
                                        <option>Seleccionar:</option>
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="OH">Ohio</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WV">West Virginia</option>
                                        </optgroup>
                                    </select>
                            </div>
                            <div class="col-lg-3">
                                <label>Provincia<small class="text-muted"></small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Provincia">
                                    <option>Seleccionar:</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label>Localidad <small class="text-muted"></small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Localidad">
                                    <option>Seleccionar:</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label>Carnet de Identidad <small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="6234278" data-toggle="tooltip" title="Inserte Carnet de Identidad">
                            </div>
                            <div class="col-lg-3">
                                <label>Expedido en: <small class="text-muted"></small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione lugar de expedicion">
                                    <option>Seleccionar:</option>
                                    <option value="LP">La Paz</option>
                                    <option value="CB">Cochabamba</option>
                                    <option value="SC">Santa Cruz</option>
                                    <option value="OR">Oruro</option>
                                    <option value="PT">Potosi</option>
                                    <option value="CH">Chuquisaca</option>
                                    <option value="TJ">Tarija</option>
                                    <option value="PD">Pando</option>
                                    <option value="BN">Beni</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label>Estado Civil <small class="text-muted"></small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Estado Civil">
                                    <option>Seleccionar:</option>
                                    <option value="CASADO">CASADO</option>
                                    <option value="SOLTERO">SOLTERO</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label>Telefono <small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="6234278" data-toggle="tooltip" title="Telefono Fijo">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label>Celular <small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="6234278" data-toggle="tooltip" title="Telefono Celular">
                            </div>
                            <div class="col-lg-3">
                                <label>Correo <small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="" data-toggle="tooltip" title="Correo Electronico">
                            </div>
                            <div class="col-lg-6">
                                <label>Direccion Actual <small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="" data-toggle="tooltip" title="Direccion Actual">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label>Tipo Vivienda Actual<small class="text-muted"></small></label>
                                <select class="form-control custom-select"  data-toggle="tooltip" title="Seleccione Tipo de Vivienda">
                                    <option>Seleccionar:</option>
                                    <option value="">PROPIO</option>
                                    <option value="">ALQUILER</option>
                                    <option value="">ANTICRETICO</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label>Direccion Permanente <small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="" data-toggle="tooltip" title="Direccion Permanente">
                            </div>
                            <div class="col-lg-3">
                                <label>Tipo Vivienda Perm. <small class="text-muted"></small></label>
                                <select class="form-control custom-select"  data-toggle="tooltip" title="Tipo Vivienda Permanente">
                                    <option>Seleccionar:</option>
                                    <option value="">PROPIO</option>
                                    <option value="">ALQUILER</option>
                                    <option value="">ANTICRETICO</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label>Carnet de Seguro <small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="6234278" data-toggle="tooltip" title="Nro de Carnet de Seguro">
                            </div>
                            <div class="col-lg-3">
                                <label>Nro. Lib. Serv. Militar <small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="6234278" data-toggle="tooltip" title="Libre Serv. Militar">
                            </div>
                            <div class="col-lg-3">
                                <label>Religion <small class="text-muted"></small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Religion">
                                    <option>Seleccionar:</option>
                                    <option value="">CATOLICO</option>
                                    <option value="">CRISTIANO</option>
                                    <option value="">ATEO</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label>Profesion Libre <small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="" data-toggle="tooltip" title="Profesion Libre">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-info">Actualizar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar Modal</button>
            </div>
        </form>
    </div>
  </div>
</div>

<!-- modal actualizar situacion militar -->
<div class="modal fade SituacionMilitar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form action="">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR SITUACION MILITAR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="card-title"></h5>
                <div class="card">
                    <div class="contenido-modal">
                        <div class="imagen-modal">
                           <img src="../../assets/images/users/1.jpg"> 
                        </div>
                        <div class="detalle-modal">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label>Carnet Militar<small class="text-muted"></small></label>
                                        <strong>31208994</strong>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Nombres<small class="text-muted"></small></label>
                                        <strong>31208994</strong>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Apellido Paterno<small class="text-muted"></small></label>
                                        <strong>31208994</strong>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Apellido Paterno<small class="text-muted"></small></label>
                                        <strong>31208994</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label>Situacion<small class="text-muted"></small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Situacion Militar">
                                    <option>Seleccionar:</option>
                                    <option value="ACTIVO">ACTIVO</option>
                                    <option value="PASIVO">PASIVO</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label>Sub Situacion<small class="text-muted"></small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Sub-Situacion Militar">
                                    <option>Seleccionar:</option>
                                    <option value="SERVICIO ACTIVO">SERVICIO ACTIVO</option>
                                    <option value="SERVICIO PASIVO">SERVICIO PASIVO</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label>Detalle <small class="text-muted"></small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Detalle">
                                    <option>Seleccionar:</option>
                                    <option value="INCORPORACION">INCORPORACION</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label>Nro. de Documento<small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="FAB. 123/19" data-toggle="tooltip" title="Nro de Documento">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label>Documento Tipo <small class="text-muted"></small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Documento Tipo">
                                    <option>Seleccionar:</option>
                                    <option value="MEMORANDUM">MEMORANDUM</option>
                                    <option value="FAX">FAX</option>
                                    <option value="OFICIO">OFICIO</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label>Fecha de Documento <small class="text-muted"></small></label>
                                <div class="input-group">
                                    <input type="date" class="form-control" data-toggle="tooltip" title="Fecha de Documento">
                                </div>                                    
                            </div>
                            <div class="col-lg-3">
                                <label>Fech. Cambio Situac. <small class="text-muted"></small></label>
                                <div class="input-group">
                                    <input type="date" class="form-control" data-toggle="tooltip" title="Cambio de Situacion">
                                </div>                                    
                            </div>
                            <div class="col-lg-3">
                                <label>Observaciones<small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="" data-toggle="tooltip" title="Observaciones">
                            </div>
                        </div>
                        <div class="card">
                            <table class="table table-hover table-sm">
                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col">Nro.</th>
                                  <th scope="col">SITUACION</th>
                                  <th scope="col">SUB SITUACION</th>
                                  <th scope="col">DETALLE</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-info">Actualizar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar Modal</button>
            </div>
        </form>
    </div>
  </div>
</div>

<!-- modal actualizar cambio de escalafon -->
<div class="modal fade CambioEscalafon" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form action="">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR CAMBIO DE ESCALAFON</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="card-title"></h5>
                <div class="card">
                    <div class="contenido-modal">
                        <div class="imagen-modal">
                           <img src="../../assets/images/users/1.jpg"> 
                        </div>
                        <div class="detalle-modal">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label>Carnet Militar<small class="text-muted"></small></label>
                                        <strong>31208994</strong>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Nombres<small class="text-muted"></small></label>
                                        <strong>31208994</strong>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Apellido Paterno<small class="text-muted"></small></label>
                                        <strong>31208994</strong>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Apellido Paterno<small class="text-muted"></small></label>
                                        <strong>31208994</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-lg-4">
                                <label>Escalafon<small class="text-muted"></small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Escalafon">
                                    <option>Seleccionar:</option>
                                    <option value="ARMAS">ARMAS</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label>Sub Escalafon<small class="text-muted"></small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Sub Escalafon">
                                    <option>Seleccionar:</option>
                                    <option value="OFICIALES">OFICIALES</option>
                                    <option value="SUBOFICIALES">SUBOFICIALES</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label>Grado <small class="text-muted"></small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Grado">
                                    <option>Seleccionar:</option>
                                    <option value="CAP.">CAP.</option>
                                    <option value="SOF.">SOF.</option>
                                    <option value="SGTO.">SGTO.</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label>Nro. de Documento<small class="text-muted">(*)</small></label>
                                <input type="text" class="form-control" placeholder="FAB. 123/19" data-toggle="tooltip" title="Inserte Nro de Documento">
                            </div>
                            <div class="col-lg-3">
                                <label>Documento Tipo <small class="text-muted"></small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Documento Tipo">
                                    <option>Seleccionar:</option>
                                    <option value="MEMORANDUM">MEMORANDUM</option>
                                    <option value="FAX">FAX</option>
                                    <option value="OFICIO">OFICIO</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label>Fecha de Documento <small class="text-muted"></small></label>
                                <div class="input-group">
                                    <input type="date" class="form-control" data-toggle="tooltip" title="Fecha de Documento">
                                </div>                                    
                            </div>
                            <div class="col-lg-3">
                                <label>Fech. Cambio Escalafon. <small class="text-muted"></small></label>
                                <div class="input-group">
                                    <input type="date" class="form-control" data-toggle="tooltip" title="Cambio de Escalafon">
                                </div>                                    
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <label>Observaciones<small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="" data-toggle="tooltip" title="Observaciones">
                            </div>
                            <div class="col-lg-3">
                                <label>Cambiar Carnet Militar<small class="text-muted"></small></label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="customControlValidation1" name="radio-stacked" required>
                                    <label class="custom-control-label" for="customControlValidation1">Si</label>
                                </div>
                                 <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                                    <label class="custom-control-label" for="customControlValidation2">No</label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <label>Nuevo C. Militar<small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="" data-toggle="tooltip" title="Nuevo C. Militar">
                            </div>
                        </div>
                        <div class="card">
                            <table class="table table-hover table-sm">
                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col">Nro.</th>
                                  <th scope="col">ESCALAFON</th>
                                  <th scope="col">SUB ESCALAFON</th>
                                  <th scope="col">GRADO</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-info">Actualizar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar Modal</button>
            </div>
        </form>
    </div>
  </div>
</div>

<!-- modal actualizar cambio de especialidad -->
<div class="modal fade CambioEspecialidad" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form action="">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR CAMBIO DE ESPECIALIDAD</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="card-title"></h5>
                <div class="card">
                    <div class="contenido-modal">
                        <div class="imagen-modal">
                           <img src="../../assets/images/users/1.jpg"> 
                        </div>
                        <div class="detalle-modal">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label>Carnet Militar<small class="text-muted"></small></label>
                                        <strong>31208994</strong>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Nombres<small class="text-muted"></small></label>
                                        <strong>31208994</strong>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Apellido Paterno<small class="text-muted"></small></label>
                                        <strong>31208994</strong>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Apellido Paterno<small class="text-muted"></small></label>
                                        <strong>31208994</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label>Especialidad <small class="text-muted"></small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Especialidad">
                                    <option>Seleccionar:</option>
                                    <option value="AVIADOR">AVIADOR</option>
                                    <option value="TECNICO">TECNICO</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label>Sub Especialidad <small class="text-muted"></small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Especialidad">
                                    <option>Seleccionar:</option>
                                    <option value="CAZA">CAZA</option>
                                    <option value="TRANSPORTE">TRANSPORTE</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label>Nro. de Documento<small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="FAB. 123/19" data-toggle="tooltip" title="Inserte Nro de Documento">
                            </div>
                            <div class="col-lg-3">
                                <label>Documento Tipo<small class="text-muted"></small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Documento Tipo">
                                    <option>Seleccionar:</option>
                                    <option value="MEMORANDUM">MEMORANDUM</option>
                                    <option value="FAX">FAX</option>
                                    <option value="OFICIO">OFICIO</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label>Fecha de Documento <small class="text-muted"></small></label>
                                <input type="date" class="form-control" data-toggle="tooltip" title="Fecha de Asignacion">
                            </div>
                            <div class="col-lg-3">
                                <label>Fecha de Cambio <small class="text-muted"></small></label>
                                <input type="date" class="form-control" data-toggle="tooltip" title="Fecha de Cambio">
                            </div>
                            <div class="col-lg-6">
                                <label>Observaciones<small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="" data-toggle="tooltip" title="Observaciones">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-info">Actualizar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar Modal</button>
            </div>
        </form>
    </div>
  </div>
</div>

<!-- modal actualizar complemento -->
<div class="modal fade ActualizarComplemento" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form action="">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR COMPLEMENTO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="card-title"></h5>
                <div class="card">
                    <div class="contenido-modal">
                        <div class="imagen-modal">
                           <img src="../../assets/images/users/1.jpg"> 
                        </div>
                        <div class="detalle-modal">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label>Carnet Militar<small class="text-muted"></small></label>
                                        <strong>31208994</strong>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Nombres<small class="text-muted"></small></label>
                                        <strong>31208994</strong>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Apellido Paterno<small class="text-muted"></small></label>
                                        <strong>31208994</strong>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Apellido Paterno<small class="text-muted"></small></label>
                                        <strong>31208994</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label>Arma <small class="text-muted"></small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Complemento">
                                    <option>Seleccionar:</option>
                                    <option value="TEC">TEC</option>
                                    <option value="DESA">DESA</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label>Nro. de Documento<small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="FAB. 123/19" data-toggle="tooltip" title="Inserte Nro de Documento">
                            </div>
                            <div class="col-lg-3">
                                <label>Documento Tipo<small class="text-muted"></small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Documento Tipo">
                                    <option>Seleccionar:</option>
                                    <option value="MEMORANDUM">MEMORANDUM</option>
                                    <option value="FAX">FAX</option>
                                    <option value="OFICIO">OFICIO</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label>Fecha de Documento <small class="text-muted"></small></label>
                                <input type="date" class="form-control" data-toggle="tooltip" title="Fecha de Documento">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-4">
                                <label>Descripcion <small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="TECNICO" data-toggle="tooltip" title="Inserte Descripcion">
                            </div>
                            <div class="col-lg-4">
                                <label>Instituto <small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="POLITECNICO MILITAR DE AERONAUTICA" data-toggle="tooltip" title="Insertar Instituto">
                            </div>
                            <div class="col-lg-4">
                                <label>Observaciones<small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="" data-toggle="tooltip" title="Observaciones">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-info">Actualizar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar Modal</button>
            </div>
        </form>
    </div>
  </div>
</div>

@endsection

