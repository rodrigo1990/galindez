	<?php 
	$fb = "https://www.facebook.com/119955871504104/";
	$ig = "https://instagram.com/revolucionpelota?igshid=139dahradwvz3";
	$email = "info@movimientomas.org"



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


	<section id="menu">
		<div class="row salones-home">

		<div class="container-fluid">

			<a href="salones.php#palmeras">

				<div class="col-md-6 col-sm-12 image-selector" id="palmeras">

					<div class="overlay"></div>

					<div class="square text-center">

						<h2>SALÓN <br> <span>PALMERAS</span></h2>

					</div>



				</div>

			</a>

			<a href="salones.php#laguna">

				<div class="col-md-6 col-sm-12 image-selector" id="laguna">

					<div class="overlay"></div>

					<div class="square text-center">

						<h2>SALÓN <br> <span>LAGUNA</span></h2>

					</div>

				</div>

			</a>

		</div>

	</div>

	</section>
    

    @stop
