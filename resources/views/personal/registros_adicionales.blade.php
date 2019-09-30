@extends('layouts')

@section('title','Registro Adicional')

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
    <center><h2 class="card-title">LISTADO DE PERSONAL PARA REGISTROS ADICIONALES</h2></center>
    <div class="form-group row">
      <div class="col-sm-2">
        <input type="text" class="form-control" placeholder="Buscar" data-toggle="tooltip" title="Inserte Dato a Buscar">
      </div>
    </div>
    <div class="card">
      @if ($personals->isNotEmpty())
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Cod.</th>
              <th scope="col">C. MILITAR</th>
              <th scope="col">NOMBRES</th>
              <th scope="col">AP. PATERNO</th>
              <th scope="col">AP. MATERNO</th>
              <th scope="col">ACCIONES</th>
            </tr>
          </thead>
          <tbody>
          @foreach($personals as $personal)
            <tr>
              <th scope="row">{{ $personal->per_codigo }}</th>
              <td>{{ $personal->per_nombre }}</td>
              <td>{{ $personal->per_paterno }}</td>
              <td>{{ $personal->per_materno }}</td>
              <td>{{ $personal->per_fecha_nacimiento  }}</td>
              <td>
                <form action="" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="personal.actualizar" ><span class="fa fa-eye"></span></a>
                    <a href="" ><span class="fa fa-edit"></span></a>
                    <a href="" ><span class="fa fa-cog"></span></a>
                </form>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      @else
        <p>No hay Fucionarios registrados</p>
      @endif
    </div>
</div>

@endsection
