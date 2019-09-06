	<?php 
	$fb = "https://www.facebook.com/galindezcatering/";
	$ig = "https://www.instagram.com/cateringgalindez/";
	$email = "info@galindez.com.ar";

	$dorrego = "http://dorrego.com.ar/";

	$escondidaPalermo = "http://www.laescondidapalermo.com.ar/";

	$escondidaOlivos = "http://www.laescondidaolivos.com.ar/";



 ?>
@extends('layouts.main')
	
	@section('content')
  	
  	@include('inc.header')

  	<div id="owl-1" class="owl-one owl-carousel owl-theme">
		<div>
			<div class="slide" id="slide-1">
				
			</div>
		</div>

		<div>
			<div class="slide" id="slide-2">
				
			</div>
		</div>

		<div>
			<div class="slide" id="slide-3">
				
			</div>
		</div>

		<div>
			<div class="slide" id="slide-4">
				
			</div>
		</div>


		<div>
			<div class="slide" id="slide-5">
				
			</div>
		</div>
	</div>

	<section id="nosotros">
		<div class="bkground-gray">
			<div class="row title text-center">
				<h1>NOSOTROS</h1>
			</div>
			<div class="row text-center content">
				<h2>19 AÑOS DE EXPERIENCIA</h2>
				<p>
					Contamos con el personal, la infraestructura y logística apropiadas para realizar todo tipo de eventos conservando la <b>calidad, el servicio y la dedicación.</b>Esto, año tras año ha convertido a <b> Galindez Catering</b>  en un importante referente en el mundo de la organización y realización de eventos.
				</p>
			</div>
		</div>

		<div class="row nos-icons-cont">
			<ul class="flex">
				<li>
					<img class="center-block" src="<?php echo asset('img/nos-icons-02.svg') ?>" alt="">
					<p class="text-center">Calidad <br> e higiene</p>

				</li>
				<li>
				
					<img class="center-block" src="<?php echo asset('img/nos-icons-03.svg') ?>" alt="">
					<p class="text-center">Equipos de <br> alta tecnología</p>

				</li>
				<li>
					<img class="center-block" src="<?php echo asset('img/nos-icons-04.svg') ?>" alt="">
					<p class="text-center">Transporte <br> refrigerado</p>

				</li>
				<li>
					<img class="center-block" src="<?php echo asset('img/nos-icons-05.svg') ?>" alt="">
					<p class="text-center">Equipamiento <br> propio.</p>
				</li>
				<li>
					<img class="center-block" src="<?php echo asset('img/nos-icons-06.svg') ?>" alt="">
					<p class="text-center">Personal <br> experimentado</p>
				</li>
			</ul>
		</div>
	</section>

	<section id="galeria">
		<div id="gallery" style="display:none;">
		
		@for($i=1 ; $i<=24 ;$i++)
			<img alt="Galindez Galería" src="<?php echo asset('img/galeria/'.$i.'.webp') ?>"
				data-image="<?php echo asset('img/galeria/'.$i.'.webp') ?>"
				data-description="Galindez Galeria">
			
		@endfor
		
		</div>
	</section>


	<section id="menu">
		<div class="row salones-home">

		<div class="container-fluid">

			<a href="salones.php#palmeras">

				<div class="col-md-6 col-sm-12 image-selector" id="palmeras">

					<div class="overlay"></div>
					
					<div class="text-container">

						<h1 class="text-center">CORPORATIVO </h1>

						<img class="arrow center-block" src="<?php echo asset('img/icon-fixed-btn-red.svg') ?>" alt="">

						<h2 class="text-center">DESCARGAR <br> <b>MENU</b>  <hr></h2>

					</div>


				</div>

			</a>

			<a href="salones.php#laguna">

				<div class="col-md-6 col-sm-12 image-selector" id="laguna">

					<div class="overlay"></div>
					
					<div class="text-container">

						<h1 class="text-center">SOCIAL</h1>
						

						<img class="arrow center-block" src="<?php echo asset('img/icon-fixed-btn-red.svg') ?>" alt="">

						<h2 class="text-center">DESCARGAR <br> <b>MENU</b>  <hr></h2>					
					</div>

				</div>

			</a>

		</div>

	</div>

	</section>



	<section id="contacto">

		<div class="row">
			<div class="container-fluid">
				<div class="col-lg-6 col-sm-6">
					<div id="map"></div>
				</div>
				<div class="col-lg-6 col-sm-6">
					<div class="list-cont">
						<ul>
							<li> <p><i class="fas fa-map-marker-alt"></i> Pacheco 3548 - Capital Federal</p> </li>
							<li> <p><i class="fas fa-phone"></i> (54 11) 4543-7933</p> </li>
							<li><p><i class="far fa-envelope"></i> Consultas: <a href="mailTo:info@galindez.com.ar">info@galindez.com.ar</a> </p> </li>
							<li><p><i class="far fa-envelope"></i> Ventas: <a href="mailTo:presupuestos@galindez.com.ar">presupuestos@galindez.com.ar</a></p> </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		

	</section>


	<section id="formulario">
		
	<div class="row form">
		
	<div class="container">
		
		<form action="">
				<h1 class="text-center">PEDÍ TU PRESUPUESTO</h1>

	  			
	  			<div class="row">
	  				<div class="col-sm-6">
	  					<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre y Apellido" onKeyUp="removeNumbers('#nombre')">
	  					<div class="error" id="nombre-error">Ingrese un nombre</div>
	  				</div>
	  				<div class="col-sm-6">
	  					<input type="text" onfocus="(this.type='date')" class="form-control form-small" name="fecha" id="fecha" placeholder="Fecha de evento">
	  					<div class="error" id="fecha-error">Ingrese una fecha</div>
	  					
	  					
	  				</div>
	  			</div>
	  			<div class="row">
	  		
	  				<div class="col-sm-6">
	  					<input type="text" class="form-control" name="email" id="email" placeholder="Mail">
	  					<div class="error" id="email-error">Ingrese un email válido</div>
	  				</div>
	  				
	  				<div class="col-sm-6">
	  					<input type="text" class="form-control" name="lugar" id="lugar" placeholder="Lugar del evento" onKeyUp="removeNumbers('#lugar')">
	  					<div class="error" id="lugar-error">Ingrese un lugar válido</div>

  			
	  				</div>
	  			</div>
	  			<div class="row">
	  				<div class="col-sm-6">
	  					<input type="number" class="form-control" name="telefono" id="telefono" placeholder="Tel de contacto">
	  					<div class="error" id="telefono-error">Ingrese un teléfono</div>
	  					
	  				</div>
	  				<div class="col-sm-6">
	  					<input type="number" class="form-control" name="cantidad-invitados" id="cantidad-invitados" placeholder="Cantidad de invitados">
						<div class="error" id="cantidad-invitados-error">Ingrese una cantidad de invitados</div>
	  				</div>
	  			</div>

	  			<div class="row">
	
	  				<div class="col-sm-6">
	  					<select name="perfil-evento" id="perfil-evento" class="form-control form-small">
			  				<option value="null">Elegir perfil de evento</option>
			  				<option value="Social">Social</option>
			  				<option value="Corporativo">Corporativo</option>
			  				<option value="Fundacion/ong">Fundación / ONG</option>
	  					</select>		
	  					<div class="error" id="perfil-evento-error">Ingrese un perfil de evento</div>
	  					
	  				</div>
	
	  				<div class="col-sm-6">
	  					<select name="tipo-evento" id="tipo-evento" class="form-control form-small">
			  				<option value="null">Elegir tipo de evento</option>
			  				<option value="Casamiento">Casamiento</option>
			  				<option value="Fiesta de 15">Fiesta de 15</option>
			  				<option value="Bar/Bar mitzvah">Bar/Bar mitzvah</option>
			  				<option value="Cumpleaños">Cumpleaños</option>
			  				<option value="Civil">Civil</option>
			  				<option value="Bautismo">Bautismo</option>
			  				<option value="Fiesta de fin de año">Fiesta de fin de año</option>
			  				<option value="Evento publicitario">Evento publicitario</option>
			  				<option value="Evento solidario">Evento solidario</option>

	  					</select>		
	  					<div class="error" id="tipo-evento-error">Ingrese un tipo de evento</div>
	  					
	  				</div>
	  				
	  			</div>
	  			<div class="row">
	  				<div class="col-sm-12">
	  					<select name="tipo-servicio" id="tipo-servicio" class="form-control form-small">
			  				<option value="null">Tipo de servicio</option>
			  				<option value="Normal">Formal</option>
			  				<option value="Finger food">Finger food</option>
			  				<option value="Asado">Asado</option>
			  				<option value="Cocktail">Cocktail</option>
			  				<option value="Cena">Cena</option>
			  				<option value="Desayuno / Coffee break">Desayuno / Coffee break</option>
			  				<option value="Jornada">Jornada</option>
			  				<option value="Media jornada con almuerzo">Media jornada con almuerzo</option>
			  				<option value="Media jornada sin almuerzo">Media jornada sin almuerzo</option>
	  					</select>		
	  					<div class="error" id="tipo-servicio-error">Ingrese un tipo de servicio</div>
	  					
	  				</div>

	  				
	  			</div>

	  			<div class="row">
	  				
	  			</div>

	  		
	  			
	  			<div class="row">
	  				<div class="col-sm-12">
	  					<label for="consulta">Consulta:</label>
	  					<textarea class="form-control" name="consulta" id="consulta"></textarea>
	  				</div>
	  			</div>

	  			<div class="row">
	  				<div class="col-sm-12">
	  					
	  					<a class="btn" onclick="validarFormulario()">ENVIAR</a>		
	  				</div>
	  			</div>
	  		</form>

	  		</div>
	</div>
		
		

	</section>


	<section id="branding-bar">
		<div class="row">
			<ul class="flex">
				<li>


					<a href="{{$escondidaOlivos}}" target="_blank">
						<img src="<?php echo asset('img/branding-bar-icon-01.png') ?>" alt="">
					</a>
				</li>
				<li>
					<a href="{{$escondidaPalermo}}" target="_blank">
						<img src="<?php echo asset('img/branding-bar-icon-02.png') ?>" alt="">
					</a>
				</li>
				<li>
					<a href="{{$dorrego}}" target="_blank">
						<img src="<?php echo asset('img/branding-bar-icon-03.png') ?>" alt="">
					</a>
				</li>
			</ul>
		</div>
	</section>

	<footer>
		<div class="row">
			<div class="container">
			<!--  	<div class="col-sm-2">
					<img src="<?php echo asset('img/logo-footer.svg') ?>" alt="">
				</div>-->
				<div class="col-sm-12">
					<p class="text-center lg">
						Pacheco 3548 - Capital Federal &nbsp;/&nbsp;  (54 11) 4543-7933 
						&nbsp; / &nbsp; 
						<b> Consultas:</b><a href="mailTo:info@galindez.com.ar" target="_blank"> info@galindez.com.ar</a> &nbsp; /  
						<b> &nbsp; Ventas:</b><a href="mailTo:presupuestos@galindez.com.ar" target="_blank"> presupuestos@galindez.com.ar</a>


					</p>

					<ul class="text-center center-block xs">
						<li>Pacheco 3548 - Capital Federal</li>
						<li>(54 11) 4543-7933</li>
						<li><b>Consultas: </b><a href="mailTo:info@galindez.com.ar" target="_blank"> info@galindez.com.ar</a></li>
						<li><b>Ventas: </b> <a href="mailTo:presupuestos@galindez.com.ar" target="_blank"> presupuestos@galindez.com.ar</a></li>
					</ul>
				</div>
			<!-- 	<div class="col-sm-2">

					<div class="rr-ss-cont">
					
						<a href="{{$ig}}" target="_blank" class="float-left rr-ss"><i class="fab fa-instagram"></i></a>

									
						<a href="{{$fb}}" target="_blank" class="float-left rr-ss"><i class="fab fa-facebook-f"></i></a>

					</div>


				</div> -->
			</div>
		</div>
	</footer>
    
    @stop
