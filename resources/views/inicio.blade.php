@extends('layouts')

@section('title','Inicio')

@section('content')


<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
       <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Inicio</h4>
            <div class="ml-auto text-right">
	            <nav aria-label="breadcrumb">
	                <ol class="breadcrumb">
	                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
	                    <!--<li class="breadcrumb-item active" aria-current="page">Library</li>-->
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
	<center><h2 class="card-title">BIENVENIDO AL SISTEMA DE PERSONAL DE LA FUERZA AÉREA BOLIVIANA</h2></center>
	<div class="card"> 
		<div class="row">
		    <div class="col-md-6">
		        <div class="">
		            <div class="card-body gallineta">
		                <img src="../../assets/images/GALLINETA.png">
		            </div>
		    	</div>
		    </div>
		    <div class="col-md-6">
		        <div class="sipefab">
		            <div class="card-body">
		                <h3>SIPEFAB</h3><br>
		                <h5>El presente Sistema es desdarrollado para una buena administración del personal de la Fuerza Aérea Boliviana, uso exclusivo del Dpto I - Personal EMGFAB.</h5>
		            </div>
		        </div>
		    </div>                
		</div>
		<div class="card">
			<h3 style="padding: 20px;">Nuestras Referencias</h3>
			<h4 style="padding: 20px;text-align: justify;">En este punto podras encontrar como referencia el manual de usuario del presente sistema, donde se establece los procedimientos necesarios para que el usuario final del Sistema de Personal de la FAB – SIPEFAB, pueda manipular de forma correcta<br><br>
			Señor Usuario: en caso de tener inconvenientes con el presente sistema comuniquese con el Administrador del Sistema o con el personal de la Direccion General de Tecnologias de Informacion y Comunicación.<br><br>

			Telefono de Referencia: 2-837876 int.(226)<br>
			Celular de Referencia: 77788899<br>
			Nuestras Redes Sociales</h4><br><br>
		</div>
	    <div class="row" style="padding: 20px;">
	        <!-- Column -->
	        <div class="col-md-6 col-lg-4 col-xlg-3">
	            <div class="card card-hover">
	                <div class="box bg-warning text-center">
	                	<h1 class="font-light text-white"><i class="mdi mdi-file-multiple"></i></h1>
	                    <h6 class="text-white">Manual de Usuario del Sistema</h6>
	                </div>
	            </div>
	        </div>
	        <!-- Column -->
	        <div class="col-md-6 col-lg-2 col-xlg-3">
	            <div class="card card-hover">
	                <div class="box bg-info text-center">
	                    <h1 class="font-light text-white"><i class="mdi mdi-facebook-messenger"></i></h1>
	                    <h6 class="text-white">Facebook Messenger</h6>
	                </div>
	            </div>
	        </div>
	        <!-- Column -->
	        <div class="col-md-6 col-lg-2 col-xlg-3">
	            <div class="card card-hover">
	                <div class="box bg-cyan text-center">
	                    <h1 class="font-light text-white"><i class="mdi mdi-twitter"></i></h1>
	                    <h6 class="text-white">Twiter</h6>
	                </div>
	            </div>
	        </div>
	        <!-- Column -->
	        <div class="col-md-6 col-lg-2 col-xlg-3">
	            <div class="card card-hover">
	                <div class="box bg-success text-center">
	                    <h1 class="font-light text-white"><i class="mdi mdi-whatsapp"></i></h1>
	                    <h6 class="text-white">Whatsapp</h6>
	                </div>
	            </div>
	        </div>
	        <!-- Column -->
	        <div class="col-md-6 col-lg-2 col-xlg-3">
	            <div class="card card-hover">
	                <div class="box bg-danger text-center">
	                    <h1 class="font-light text-white"><i class="mdi mdi-email-outline"></i></h1>
	                    <h6 class="text-white">Correo Electrónico</h6>
	                </div>
	            </div>
	        </div>
	        <!-- Column -->
	    </div>
	</div>
</div>

@endsection