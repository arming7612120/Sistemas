@extends('layouts')

@section('title','Actualizar Cursos')

@section('content')


<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
       <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Actualizar Cursos</h4>
            <div class="ml-auto text-right">
	            <nav aria-label="breadcrumb">
	                <ol class="breadcrumb">
	                    <li class="breadcrumb-item">Formacion Profesional</li>
	                    <li class="breadcrumb-item active" aria-current="page">Actualizar Cursos</li>
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
    <center><h2 class="card-title">ACTUALIZAR CURSOS</h2></center>
    <div class="card">
        <div class="card-body wizard-content">
            <h4 class="card-title">NOTA: En este punto podras registrar los cursos realizados y actualizar los mismos</h4>
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
                                <a href="" data-toggle="modal" data-target=".RegistrarCursos" class="btn btn-info">Registrar Cursos</a>
                                <a href="" data-toggle="modal" data-target=".ActualizarCursos" class="btn btn-info">Actualizar Cursos</a>
                                <a href="/cursos.listar_cursos" class="btn btn-secondary">Volver Atrás</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal registro de cursos -->
<div class="modal fade RegistrarCursos" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form action="">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">REGISTRAR CURSOS REALIZADOS</h5>
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
                                <label>Nro. de Documento<small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="FAB. 123/19" data-toggle="tooltip" title="Inserte Nro de Documento">
                            </div>
                            <div class="col-lg-3">
                                <label>Fecha Otorgacion<small class="text-muted"></small></label>
                                <div class="input-group">
                                    <input type="date" class="form-control" data-toggle="tooltip" title="Fecha de Documento">
                                </div>                                    
                            </div>
                            <div class="col-lg-3">
                                <label>Curso <small class="text-muted"></small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Curso">
                                    <option>Seleccionar:</option>
                                    <option value="POSTGRADO">POSTGRADO</option>
                                    <option value="PREGRADO">PREGRADO</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label>Tipo de Curso<small class="text-muted"></small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Curso Realizado">
                                    <option>Seleccionar:</option>
                                    <option value="DIPLIMADO (A) EPSSM DE MUSICA">DIPLIMADO (A) EPSSM DE MUSICA</option>
                                    <option value="DIPLOMADO DESA">DIPLOMADO DESA</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label>Emitido por <small class="text-muted"></small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Entidad Emisora">
                                    <option>Seleccionar:</option>
                                    <option value="EJERCITO">EJERCITO</option>
                                    <option value="FAB">FAB</option>
                                    <option value="ARMADA">ARMADA</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label>Reparticion <small class="text-muted"></small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Reparticion">
                                    <option>Seleccionar:</option>
                                    <option value="COMANEJTO">COMANEJTO</option>
                                    <option value="COMANGRALFAB">COMANGRALFAB</option>
                                </select>                                    
                            </div>
                            <div class="col-lg-3">
                                <label>Lugar <small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="SKYROOM DEL COMANGRALFAB" data-toggle="tooltip" title="Inserte Lugar">                                    
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label>Del<small class="text-muted"></small></label>
                                <input type="date" class="form-control" data-toggle="tooltip" title="Fecha de Inicio">
                            </div>
                            <div class="col-lg-3">
                                <label>Al<small class="text-muted"></small></label>
                                <input type="date" class="form-control" data-toggle="tooltip" title="Fecha de Finalizacion">
                            </div>
                            <div class="col-lg-3">
                                <label>Horas Académicas <small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="120 hrs" data-toggle="tooltip" title="Inserte Horas del Curso">
                            </div>
                            <div class="col-lg-3">
                                <label>Posicion de Egreso<small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="" data-toggle="tooltip" title="Antiguedad de egreso">                                    
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <label>Descripcion <small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="Observaciones" data-toggle="tooltip" title="Inserte la Descripcion">
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

<!-- modal actualizar cursos -->
<div class="modal fade ActualizarCursos" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form action="">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR LOS CURSOS REALIZADOS</h5>
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
                                <label>Nro. de Documento<small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="FAB. 123/19" data-toggle="tooltip" title="Inserte Nro de Documento">
                            </div>
                            <div class="col-lg-3">
                                <label>Fecha Otorgacion<small class="text-muted"></small></label>
                                <div class="input-group">
                                    <input type="date" class="form-control" data-toggle="tooltip" title="Fecha de Documento">
                                </div>                                    
                            </div>
                            <div class="col-lg-3">
                                <label>Curso <small class="text-muted"></small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Curso">
                                    <option>Seleccionar:</option>
                                    <option value="POSTGRADO">POSTGRADO</option>
                                    <option value="PREGRADO">PREGRADO</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label>Tipo de Curso<small class="text-muted"></small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Curso Realizado">
                                    <option>Seleccionar:</option>
                                    <option value="DIPLIMADO (A) EPSSM DE MUSICA">DIPLIMADO (A) EPSSM DE MUSICA</option>
                                    <option value="DIPLOMADO DESA">DIPLOMADO DESA</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label>Emitido por <small class="text-muted"></small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Entidad Emisora">
                                    <option>Seleccionar:</option>
                                    <option value="EJERCITO">EJERCITO</option>
                                    <option value="FAB">FAB</option>
                                    <option value="ARMADA">ARMADA</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label>Reparticion <small class="text-muted"></small></label>
                                <select class="form-control custom-select" data-toggle="tooltip" title="Seleccione Reparticion">
                                    <option>Seleccionar:</option>
                                    <option value="COMANEJTO">COMANEJTO</option>
                                    <option value="COMANGRALFAB">COMANGRALFAB</option>
                                </select>                                    
                            </div>
                            <div class="col-lg-3">
                                <label>Lugar <small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="SKYROOM DEL COMANGRALFAB" data-toggle="tooltip" title="Inserte Lugar">                                    
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label>Del<small class="text-muted"></small></label>
                                <input type="date" class="form-control" data-toggle="tooltip" title="Fecha de Inicio">
                            </div>
                            <div class="col-lg-3">
                                <label>Al<small class="text-muted"></small></label>
                                <input type="date" class="form-control" data-toggle="tooltip" title="Fecha de Finalizacion">
                            </div>
                            <div class="col-lg-3">
                                <label>Horas Académicas <small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="120 hrs" data-toggle="tooltip" title="Inserte Horas del Curso">
                            </div>
                            <div class="col-lg-3">
                                <label>Posicion de Egreso<small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="" data-toggle="tooltip" title="Antiguedad de egreso">                                    
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <label>Descripcion <small class="text-muted"></small></label>
                                <input type="text" class="form-control" placeholder="Observaciones" data-toggle="tooltip" title="Inserte la Descripcion">
                            </div>
                        </div>
                        <div class="card">
                            <table class="table table-hover table-sm">
                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col">Nro.</th>
                                  <th scope="col">CURSOS</th>
                                  <th scope="col">TIPO DE CURSO</th>
                                  <th scope="col">EMISOR</th>
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
                <button type="submit" class="btn btn-info">Registrar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar Modal</button>
            </div>
        </form>
    </div>
  </div>
</div>

@endsection

