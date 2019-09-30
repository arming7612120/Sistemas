@extends('layouts')

@section('title','Registro Personal')

@section('content')


<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
       <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Registro Adicional</h4>
            <div class="ml-auto text-right">
	            <nav aria-label="breadcrumb">
	                <ol class="breadcrumb">
	                    <li class="breadcrumb-item">Informacion Personal</li>
	                    <li class="breadcrumb-item active" aria-current="page">Registro Adicional</li>
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
    <center><h2 class="card-title">REGISTROS ADICIONALES</h2></center>
    <div class="card">
        <div class="card-body wizard-content">
            <h4 class="card-title">NOTA: Los Registros Adicionales son necesarios una vez dado de alta un nuevo personal</h4>
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
                                <a href="" data-toggle="modal" data-target=".RegistrarEscalafon" class="btn btn-info">Registrar Escalafon</a>
                                <a href="" data-toggle="modal" data-target=".RegistrarEspecialidad" class="btn btn-info">Registrar Especialidad Militar</a>
                                <a href="" data-toggle="modal" data-target=".RegistrarSituacionMilitar" class="btn btn-info">Registrar Situacion Militar</a>
                                <a href="" data-toggle="modal" data-target=".RegistrarComplemento" class="btn btn-info">Registrar Complemento</a>
                                <a href="/personal.registros_adicionales" class="btn btn-secondary">Volver Atrás</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal registro escalafon -->
<div class="modal fade RegistrarEscalafon" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form action="">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">REGISTRAR ESCALAFON</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="card-title">NOTA: Todos los campos señalados con (*) son campos obligatorios</h5>
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
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-lg-4">
                                <label>Escalafon<small class="text-muted">(*)</small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Escalafon">
                                    <option>Seleccionar:</option>
                                    <option value="ARMAS">ARMAS</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label>Sub Escalafon<small class="text-muted">(*)</small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Sub Escalafon">
                                    <option>Seleccionar:</option>
                                    <option value="OFICIALES">OFICIALES</option>
                                    <option value="SUBOFICIALES">SUBOFICIALES</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label>Grado <small class="text-muted">(*)</small></label>
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
                                <label>Documento Tipo <small class="text-muted">(*)</small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Documento Tipo">
                                    <option>Seleccionar:</option>
                                    <option value="MEMORANDUM">MEMORANDUM</option>
                                    <option value="FAX">FAX</option>
                                    <option value="OFICIO">OFICIO</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label>Fecha de Documento <small class="text-muted">(*)</small></label>
                                <div class="input-group">
                                    <input type="date" class="form-control" data-toggle="tooltip" title="Fecha de Documento">
                                </div>                                    
                            </div>
                            <div class="col-lg-3">
                                <label>Fecha de Asignacion <small class="text-muted">(*)</small></label>
                                <div class="input-group">
                                    <input type="date" class="form-control" data-toggle="tooltip" title="Fecha de Asignacion">
                                </div>                                    
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <label>Observaciones <small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="Observaciones" data-toggle="tooltip" title="Inserte las Observaciones">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-info">Registrar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar Modal</button>
            </div>
        </form>
    </div>
  </div>
</div>

<!-- modal registro especialidad militar -->
<div class="modal fade RegistrarEspecialidad" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form action="">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">REGISTRAR ESPECIALIDAD MILITAR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="card-title">NOTA: Todos los campos señalados con (*) son campos obligatorios</h5>
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
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-lg-4">
                                <label>Nro. de Documento<small class="text-muted">(*)</small></label>
                                <input type="text" class="form-control" placeholder="FAB. 123/19" data-toggle="tooltip" title="Inserte Nro de Documento">
                            </div>
                            <div class="col-lg-4">
                                <label>Documento Tipo<small class="text-muted">(*)</small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Documento Tipo">
                                    <option>Seleccionar:</option>
                                    <option value="MEMORANDUM">MEMORANDUM</option>
                                    <option value="FAX">FAX</option>
                                    <option value="OFICIO">OFICIO</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label>Fecha de Documento <small class="text-muted">(*)</small></label>
                                <input type="date" class="form-control" data-toggle="tooltip" title="Fecha de Asignacion">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label>Especialidad <small class="text-muted">(*)</small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Especialidad">
                                    <option>Seleccionar:</option>
                                    <option value="AVIADOR">AVIADOR</option>
                                    <option value="TECNICO">TECNICO</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label>Sub Especialidad <small class="text-muted">(*)</small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Especialidad">
                                    <option>Seleccionar:</option>
                                    <option value="CAZA">CAZA</option>
                                    <option value="TRANSPORTE">TRANSPORTE</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label>Observaciones <small class="text-muted"></small></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Observaciones" data-toggle="tooltip" title="Inserte las Observaciones">
                                </div>                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-info">Registrar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar Modal</button>
            </div>
        </form>
    </div>
  </div>
</div>

<!-- modal registro situacion militar -->
<div class="modal fade RegistrarSituacionMilitar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form action="">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">REGISTRAR SITUACION MILITAR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="card-title">NOTA: Todos los campos señalados con (*) son campos obligatorios</h5>
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
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-lg-4">
                                <label>Situacion<small class="text-muted">(*)</small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Sit. Militar">
                                    <option>Seleccionar:</option>
                                    <option value="ACTIVO">ACTIVO</option>
                                    <option value="PASIVO">PASIVO</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label>Sub Situacion<small class="text-muted">(*)</small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Sub-Sit. Militar">
                                    <option>Seleccionar:</option>
                                    <option value="SERVICIO ACTIVO">SERVICIO ACTIVO</option>
                                    <option value="SERVICIO PASIVO">SERVICIO PASIVO</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label>Detalle <small class="text-muted">(*)</small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Detalle">
                                    <option>Seleccionar:</option>
                                    <option value="INCORPORACION">INCORPORACION</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-4">
                                <label>Nro. de Documento<small class="text-muted">(*)</small></label>
                                <input type="text" class="form-control" placeholder="FAB. 123/19" data-toggle="tooltip" title="Inserte Nro de Documento">
                            </div>
                            <div class="col-lg-4">
                                <label>Documento Tipo <small class="text-muted">(*)</small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Documento Tipo">
                                    <option>Seleccionar:</option>
                                    <option value="MEMORANDUM">MEMORANDUM</option>
                                    <option value="FAX">FAX</option>
                                    <option value="OFICIO">OFICIO</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label>Fecha de Documento <small class="text-muted">(*)</small></label>
                                <div class="input-group">
                                    <input type="date" class="form-control" data-toggle="tooltip" title="Fecha de Documento">
                                </div>                                    
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <label>Observaciones <small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="Observaciones" data-toggle="tooltip" title="Inserte las Observaciones">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-info">Registrar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar Modal</button>
            </div>
        </form>
    </div>
  </div>
</div>

<!-- modal registro complementor -->
<div class="modal fade RegistrarComplemento" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form action="">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">REGISTRAR COMPLEMENTO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="card-title">NOTA: Todos los campos señalados con (*) son campos obligatorios</h5>
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
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-lg-4">
                                <label>Arma<small class="text-muted">(*)</small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Sit. Militar">
                                    <option>Seleccionar:</option>
                                    <option value="A. AV.">A. AV.</option>
                                    <option value="A. AO.">A. AO.</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label>Descripcion<small class="text-muted">(*)</small></label>
                                <input type="text" class="form-control" placeholder="ALUMNO AVIADOR" data-toggle="tooltip" title="Inserte Descripcion">
                            </div>
                            <div class="col-lg-4">
                                <label>Unidad <small class="text-muted">(*)</small></label>
                                <input type="text" class="form-control" placeholder="GRUPO AEREO DE ENTRENAMIENTO" data-toggle="tooltip" title="Inserte Unidad">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-4">
                                <label>Nro. de Documento<small class="text-muted">(*)</small></label>
                                <input type="text" class="form-control" placeholder="FAB. 123/19" data-toggle="tooltip" title="Inserte Nro de Documento">
                            </div>
                            <div class="col-lg-4">
                                <label>Documento Tipo <small class="text-muted">(*)</small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Documento Tipo">
                                    <option>Seleccionar:</option>
                                    <option value="MEMORANDUM">MEMORANDUM</option>
                                    <option value="FAX">FAX</option>
                                    <option value="OFICIO">OFICIO</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label>Fecha de Documento <small class="text-muted">(*)</small></label>
                                <div class="input-group">
                                    <input type="date" class="form-control" data-toggle="tooltip" title="Fecha de Documento">
                                </div>                                    
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <label>Observaciones <small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="Observaciones" data-toggle="tooltip" title="Inserte las Observaciones">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-info">Registrar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar Modal</button>
            </div>
        </form>
    </div>
  </div>
</div>

@endsection

