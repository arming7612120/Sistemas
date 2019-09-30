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
    <center><h2 class="card-title">LISTADO DE PERSONAL PARA ACTUALIZAR CURSOS</h2></center>
    <div class="form-group row">
      <div class="col-sm-2">
        <input type="text" class="form-control" placeholder="Buscar" data-toggle="tooltip" title="Inserte Dato a Buscar">
      </div>
    </div>
    <div class="card">
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th scope="col">NRO.</th>
              <th scope="col">C. MILITAR</th>
              <th scope="col">GRADO</th>
              <th scope="col">NOMBRES Y APELLIDOS</th>
              <th scope="col">ACIONES</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td><a href="/cursos.registrar_cursos" class=""><span class="fa fa-eye"></span></a><a href="" class=""><span class="fa fa-edit"></span></a><a href="" class=""><span class="fa fa-archive"></span></a></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td><a href="" class=""><span class="fa fa-eye"></span></a><a href="" class=""><span class="fa fa-edit"></span></a><a href="" class=""><span class="fa fa-archive"></span></a></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
              <td><a href="" class=""><span class="fa fa-eye"></span></a><a href="" class=""><span class="fa fa-edit"></span></a><a href="" class=""><span class="fa fa-archive"></span></a></td>
            </tr>
          </tbody>
        </table>
    </div>
</div>

@endsection

