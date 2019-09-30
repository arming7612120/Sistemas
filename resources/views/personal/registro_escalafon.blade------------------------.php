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
    <center><h2 class="card-title">REGISTRO DE ESCALAFÓN</h2></center>
    <div class="card">
        <div class="card-body wizard-content">
            <h4 class="card-title">NOTA: Todos los campos señalados con (*) son campos obligatorios</h4>
            <form id="example-form" action="#" class="m-t-40"> 
                <div class="row">
                    <div class="col-12">
                        <div class="card">
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
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>                                    
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Fecha de Asignacion <small class="text-muted">(*)</small></label>
                                        <div class="input-group">
                                            <input type="date" class="form-control" data-toggle="tooltip" title="Fecha de Asignacion">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-12">
                                        <label>Observaciones <small class="text-muted">(*)</small></label>
                                        <input type="text" class="form-control" placeholder="Observaciones" data-toggle="tooltip" title="Inserte las Observaciones">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-info">Registrar</button>
                                <button type="reset" class="btn btn-secondary">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

